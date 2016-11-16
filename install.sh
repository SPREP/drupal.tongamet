cd drupal
drush si lightning -y
drush config-set system.site uuid $(head -1 ../config/deploy/system.site.yml | sed 's/uuid: //') -y
drush ev '\Drupal::entityManager()->getStorage("shortcut_set")->load("default")->delete();'
drush cim -y