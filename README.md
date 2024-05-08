<p align="center">
<img width="150" height="150" src="assets/logo.png" alt="Laravel Package Skeleton Logo"/>
<br><b>Laravel Package Skeleton</b>
</p>

Creating Laravel packages made it easy! You can start building your own modular, organized package effortlessly.

> [!NOTE]
> This package requires PHP 8.2+ and Laravel 11+ 

## Installation

You can install the package globally via composer:

```
composer global require algoyounes/laravel-package-skeleton
```

## Usage

Once installed, you can use the following commands to streamline your package development process:

**⚡️ Create your package using composer :**
```
composer create-project algoyounes/laravel-package-skeleton --prefer-source YourPackageName
```

**🚀 Run the entire test suite :**
```
composer test
```

Running `composer test` will execute the following tasks :
- 🔄 Refactoring Tests: `composer rector`
- 🧹 Linting Tests: `composer test:lint`
- 🔍 Static Analysis Tests: `composer test:types`
- 🛠️ Unit Tests: `composer test:unit`
