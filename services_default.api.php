<?php

/**
 * Implement this hook to use hook_services_default_services().
 *
 * @return array
 */
function hook_services_api() {
  return array(
    'api' => 3,
  );
}

/**
 * Export services endpoints via code.
 */
function hook_services_default_services() {

}
