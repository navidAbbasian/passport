<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Passport Authentication <br>

### Multi Authentication and use custome class for Authentication<br>
## Version:
```
"require": {
        "php": "^8.0.2",
        "guzzlehttp/guzzle": "^7.2",
        "laravel/framework": "^9.19",
        "laravel/passport": "^11.8",
        }
```

## How To Use: <br>

-Create Customer Model <br>
-Add Your Custom Provider In Providers Array In ``config/auth.php`` <br>
```
'customers' => [
        'driver' => 'eloquent',
        'model' => App\Customer::class,
```
-Add ``Customer.php`` in Illuminate\Foundation\Auth\Access <br>
```
<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;

class Customer extends Model implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, MustVerifyEmail;
}
```
multi auth with two table<br>
is good for develop side, in product i prefer you JWT
