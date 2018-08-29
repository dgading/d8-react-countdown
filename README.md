# Drupal 8 and React Hydrate

## What is this?
This is the newer version of my old React Drupal Block. In that one I built a React app and just loaded into a block that had my target div. With the release of React 16, we can start using the new React DOM hydrate which allows us to server render the page and then attach React components. The most noticable difference is if you look at the source code, you will see the node id printed in the intial HTML. React only takes over after the page loads. I'm also not including the React files, I have a library loading React and ReactDOM and just creating my component in a plain JS file. 

## Installation
Download this module into your Drupal 8 modules folder and enable it. It will create a block that can be added to any node, using something like Block Layout.  

To see the best example, you will need to create a few nodes so the countdown will last longer. Once it gets to 0 it will stop counting. 
