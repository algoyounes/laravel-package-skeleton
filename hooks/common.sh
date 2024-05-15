#!/usr/bin/env bash

function onExit {
    if [[ $? != 0 ]]; then
        echo "Fix the error before committing or pushing or add '--no-verify'"
    fi
}

function getChangedFiles() {
    local pattern="$1"

    git diff --cached --name-only --diff-filter=ACMR HEAD \
        | grep -E "$pattern" \
        | xargs -n1 --no-run-if-empty realpath
}
