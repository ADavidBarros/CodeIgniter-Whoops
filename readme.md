## [CodeIgniter](https://codeigniter.com/) [Whoops](http://filp.github.io/whoops/) Integration

There are a couple things to setup, It is really simple however, after hours of research really wasn't able to find a good example. I hope this helps someone 

This entry in [StackOverFlow](https://stackoverflow.com/a/48360425) help a lot

### Composer Dependencies
```bash
### composer require filp/whoops
```
or update the composer.json file 
```json
"require": {
		"filp/whoops": "^2.1"
	},
```

### Setup Hook

 Under the application folder 

Instruction by [ZGUARD](https://stackoverflow.com/users/9238132/zguard)
 1. Make sure hooks are enabled in `config/config.php`
        
        $config['enable_hooks'] = true;

 2. Add a hook in `config/hooks.php`

        $hook['pre_system'][] = array(
          'class'    => 'WhoopsHook',
          'function' => 'bootWhoops',
          'filename' => 'WhoopsHook.php',
          'filepath' => 'hooks',
          'params'   => array()
        );

 3. Create a new file `hooks/WhoopsHook.php` with the following code:

        <?php
        class WhoopsHook {
            public function bootWhoops() {
                $whoops = new \Whoops\Run;
                $whoops->pushHandler(new Whoops\Handler\PrettyPageHandler());
                $whoops->register();
            }
        }

## Additonal Checks

In the config file make sure to enable composer 
```php
//$config['composer_autoload'] = TRUE; //This didn't work for me
```
Regular Error Handler: 
![alt text][error]

[error]: https://raw.githubusercontent.com/dbpiano/CodeIgniter-Whoops/master/regularError.png

```php
$config['composer_autoload'] = 'vendor/autoload.php';
```
CI-Whoops:
![alt text][logo]

[logo]: https://raw.githubusercontent.com/dbpiano/CodeIgniter-Whoops/master/whoops.png "Whoops"

