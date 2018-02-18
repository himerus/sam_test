<?php

namespace Drupal\sam_test\Commands;

use Drush\Commands\DrushCommands;
use Drush\SiteAlias\SiteAliasManagerAwareInterface;
use Drush\SiteAlias\SiteAliasManagerAwareTrait;

class SamTestCommands extends DrushCommands implements SiteAliasManagerAwareInterface {
  use SiteAliasManagerAwareTrait;

  /**
   * List implementations of a given event and optionally edit one.
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
}
