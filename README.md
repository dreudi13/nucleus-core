# Nucleus Core System

The core system for the Php framework Nucleus.

## Specifications

To describe a new specification:

```
composer desc Full\\Qualified\\Name
```

To run the specifications:

```
composer run # will run all specifications
composer run path/to/fileOrDirectory # to specify a single file or a folder
```

## Coding standard

All framework uses PSR12 coding standard.

To validate check if files respects the standard:

```
composer snif
```

To fix standard errors automatically:
```
composer csfix
```
