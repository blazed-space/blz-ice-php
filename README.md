# blz-ice-php
An awesome server side framework for PHP/Fuel.

## Using
To use, you must have PHP 5.4+ Installed, as well as Composer.
You must also have Node.js+NPM installed to run the installer. If you do not have Node, you can also install manually with Composer.

Run the following command to install dependencies (at the root directory):
```shell
npm run install
```

To update run,

```shell
npm run update
```

## Developing
To run a local development server on default port 8000 run,

```shell
npm run dev
```

## Deployment
When deploying to production servers, be sure to change the environment. This can either be done in /src/app/bootstrap.php or by overriding using the following apache directive:

```
SetEnv FUEL_ENV production
```

Or, if using NGINX, add the following in /etc/nginx/sites-available:

```
location ~ \.php$ {
    fastcgi_param FUEL_ENV production;
}
```

## Special Thanks
This project uses:
- [FuelPHP](https://fuelphp.com/)
- [BundleFU](https://github.com/dotsunited/BundleFu)
- [ICE](https://github.com/blazed-space/ice)
- [BLZ-FIRE](https://github.com/blazed-space/blz-fire)
- [TailwindCSS](https://tailwindcss.com/)
- [Kitwind](https://kitwind.io/products/kometa/)
- [MambaUI](https://mambaui.com/)
- [JQuery](https://jquery.com/)

Development Team:
- [Tyler Ruff](https://github.com/tyler-ruff)
- [Matthew Ruff](https://github.com/matt-ruff)
- [Blazed Labs](https://github.com/blazed-labs)
- [Blazed Space](https://github.com/blazed-space)
- [Blazed Publishing](https://github.com/blazed-xyz)