<?php
namespace Drupal\bd_contact\Controller;
class DemoController {
    public function bdcontact() {
        return array(
                '#title' => 'Hello World!',
                '#markup' => 'Here is some content.',
            );
    }
}