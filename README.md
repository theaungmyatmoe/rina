# E-commerce
E-commerce site using custom php MVC.

# Requirements

- PHP 7.^
- Composer 3.^

# Installation

```

composer install

```

## Setup Environment Variables

```

.env.example -> .env

```

## Production

```

APP_DEBUG=Off

```
## Status

- Finished

## Directory Structure

```

.
├── app                                                    │   ├── classes
│   ├── config                                             │   ├── controllers
│   ├── functions                                          │   ├── models
│   └── routing                                            ├── bootstrap
│   └── cache                                              ├── public
│   └── assets                                             │       ├── css
│       ├── images
│       ├── js
│       ├── sass
│       └── uploads
├── resources
│   └── views
│       ├── admin
│       │   ├── category
│       │   └── product                                    │       ├── layouts
│       └── user
└── vendor
    ├── altorouter                                             │   └── altorouter
    ├── bin                                                    ├── composer
    ├── doctrine
    │   └── inflector                                          │       ├── docs
    │       │   └── en
    │       └── lib                                            │           └── Doctrine
    │               ├── Common                                 │               │   └── Inflector
    │               └── Inflector
    │                   └── Rules                              │                       ├── English
    │                       ├── French
    │                       ├── NorwegianBokmal
    │                       ├── Portuguese
    │                       ├── Spanish
    │                       └── Turkish
    ├── filp
    │   └── whoops
    │       └── src
    │           └── Whoops
    │               ├── Exception
    │               ├── Handler
    │               ├── Resources
    │               │   ├── css
    │               │   ├── js
    │               │   └── views
    │               └── Util
    ├── graham-campbell
    │   └── result-type
    │       └── src
    ├── illuminate
    │   ├── container
    │   ├── contracts
    │   │   ├── Auth
    │   │   │   └── Access
    │   │   ├── Broadcasting
    │   │   ├── Bus
    │   │   ├── Cache
    │   │   ├── Config
    │   │   ├── Console
    │   │   ├── Container
    │   │   ├── Cookie
    │   │   ├── Database
    │   │   │   └── Events
    │   │   ├── Debug
    │   │   ├── Encryption                                     │   │   ├── Events
    │   │   ├── Filesystem
    │   │   ├── Foundation
    │   │   ├── Hashing
    │   │   ├── Http
    │   │   ├── Mail
    │   │   ├── Notifications
    │   │   ├── Pagination
    │   │   ├── Pipeline
    │   │   ├── Queue
    │   │   ├── Redis
    │   │   ├── Routing
    │   │   ├── Session
    │   │   ├── Support
    │   │   ├── Translation
    │   │   ├── Validation
    │   │   └── View
    │   ├── database
    │   │   ├── Capsule
    │   │   ├── Concerns
    │   │   ├── Connectors
    │   │   ├── Console
    │   │   │   ├── Factories
    │   │   │   │   └── stubs
    │   │   │   ├── Migrations
    │   │   │   └── Seeds
    │   │   │       └── stubs
    │   │   ├── Eloquent
    │   │   │   ├── Concerns
    │   │   │   └── Relations
    │   │   │       └── Concerns
    │   │   ├── Events
    │   │   ├── Migrations
    │   │   │   └── stubs
    │   │   ├── Query
    │   │   │   ├── Grammars
    │   │   │   └── Processors
    │   │   └── Schema
    │   │       └── Grammars
    │   ├── events
    │   ├── filesystem
    │   ├── support
    │   │   ├── Facades
    │   │   ├── Testing
    │   │   │   └── Fakes
    │   │   └── Traits
    │   └── view
    │       ├── Compilers
    │       │   └── Concerns
    │       ├── Concerns
    │       ├── Engines
    │       └── Middleware
    ├── nesbot
    │   └── carbon
    │       ├── bin
    │       └── src
    │           └── Carbon
    │               ├── Cli
    │               ├── Doctrine
    │               ├── Exceptions
    │               ├── Lang
    │               ├── Laravel
    │               ├── List
    │               ├── PHPStan
    │               └── Traits
    ├── philo
    │   └── laravel-blade
    │       └── src
    ├── phpmailer
    │   └── phpmailer
    │       ├── language
    │       └── src
    ├── phpoption
    │   └── phpoption
    │       └── src
    │           └── PhpOption
    ├── psr
    │   ├── container
    │   │   └── src
    │   ├── log
    │   │   └── Psr
    │   │       └── Log
    │   │           └── Test
    │   └── simple-cache
    │       └── src
    ├── symfony
    │   ├── debug
    │   │   ├── Exception                                      │   │   └── FatalErrorHandler
    │   ├── finder
    │   │   ├── Comparator
    │   │   ├── Exception
    │   │   └── Iterator
    │   ├── polyfill-ctype
    │   ├── polyfill-mbstring
    │   │   └── Resources
    │   │       └── unidata
    │   ├── polyfill-php80
    │   │   └── Resources
    │   │       └── stubs
    │   ├── translation
    │   │   ├── Catalogue
    │   │   ├── Command
    │   │   ├── DataCollector
    │   │   ├── DependencyInjection
    │   │   ├── Dumper
    │   │   ├── Exception
    │   │   ├── Extractor
    │   │   ├── Formatter
    │   │   ├── Loader
    │   │   ├── Reader
    │   │   ├── Resources
    │   │   │   ├── bin
    │   │   │   ├── data
    │   │   │   └── schemas
    │   │   ├── Util
    │   │   └── Writer
    │   └── translation-contracts
    │       └── Test
    ├── vlucas
    │   └── phpdotenv
    │       └── src
    │           ├── Exception
    │           ├── Loader
    │           ├── Parser
    │           ├── Repository
    │           │   └── Adapter
    │           ├── Store
    │           │   └── File
    │           └── Util
    └── voku
        └── pagination
            └── src
                └── voku
                    └── helper

```
