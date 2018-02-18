<?php

namespace Drupal\sam_test\Commands;

use Drush\Commands\DrushCommands;
use Drush\SiteAlias\SiteAliasManagerAwareInterface;
use Drush\SiteAlias\SiteAliasManagerAwareTrait;

class SamTestCommands extends DrushCommands implements SiteAliasManagerAwareInterface {
  use SiteAliasManagerAwareTrait;

  /**
   * Test to run $this->siteAliasManager()->getSelf();
   *
   * @command sam:test
   * @aliases sam-test
   * @usage drush sam:test
   *   Test that `implements SiteAliasManagerAwareInterface` is working correctly.
   * @handle-remote-commands true
   */
  public function example() {
    $alias = $this->siteAliasManager()->getSelf();
  }

  /**
   * Test to run $this->siteAliasManager()->searchLocations();
   *
   * @command sam:test2
   * @aliases sam-test2
   * @usage drush sam:test2
   *   Test that `implements SiteAliasManagerAwareInterface` is working correctly.
   * @handle-remote-commands true
   */
  public function example_two() {
    $alias = $this->siteAliasManager()->searchLocations();
  }
}
