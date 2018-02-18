### SAM Test
This module was generated with `drush @alias generate module-standard`.

This module/repository is meant to help test an issue with [Drush 9](https://github.com/drush-ops/drush).

The class `SamTestCommands` was generated with `drush @alias generate dcf`

Taking example from [docs.drush.org/en/master/site-alias-manager](http://docs.drush.org/en/master/site-alias-manager/), and many of the Classes that implement `SiteAliasManagerAwareInterface`, there appears to be something wrong when trying to implement the Interface outside of the default Drush commands that do so. 

Any call to `$this->siteAliasManager()->FUNCTION` results in the following:

`drush @my-functioning-alias sam:test` results in:
> [error]  Error: Call to a member function getSelf() on null in Drupal\sam_test\Commands\SamTestCommands->example() (line 22 of modules/custom/sam_test/src/Commands/SamTestCommands.php) #0 [internal function]: Drupal\sam_test\Commands\SamTestCommands->example(Array)
