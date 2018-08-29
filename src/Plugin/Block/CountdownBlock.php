<?php

namespace Drupal\d8_react_hydrate_example\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Countdown' Block.
 *
 * @Block(
 *   id = "countdown_block",
 *   admin_label = @Translation("Countdown"),
 *   category = @Translation("Custom"),
 * )
 */
class CountdownBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $nid = 0;
    $node = \Drupal::routeMatch()->getParameter('node');
    if ($node instanceof \Drupal\node\NodeInterface) {
      $nid = $node->id();
    }
    
    return [
      '#markup' => '<div>NID: '. $nid . '</div><div id="countdown-app"><h1>'. $nid . '</h1></div>',
      '#attached' => [
        'library' => [
          'd8_react_hydrate_example/react',
          'd8_react_hydrate_example/countdown'
        ],
        'drupalSettings' => [
          'reactNID' => $nid,
        ]
      ],
    ];

  }

}
