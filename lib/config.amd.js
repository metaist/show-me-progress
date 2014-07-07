var require = {
  baseUrl: '.',

  paths: {
    // Dependency Management
    'text': 'lib/require-text-2.0.12/text',
    'order': 'lib/require-order-1.0.5/order',

    // Layout
    'bootstrap': 'lib/bootstrap-3.2.0/js/bootstrap.min',
    'jquery': 'lib/jquery-1.11.1/jquery.min',
    'jquery.gray': 'lib/jquery.gray-1.3.2/js/jquery.gray.min',
    'jquery.growl': 'lib/jquery.growl-1.6.3/javascripts/jquery.growl',
    'jquery.superdom': 'lib/jquery.superdom-0.0.5/jquery.superdom.min',

    // Graphics
    'd3': 'lib/d3-3.4.8/d3.min',

    // Space & Time
    'arc': 'lib/arc-0.1.0/arc',
    'leaflet': 'lib/leaflet-0.7.2/leaflet',
    'leaflet-providers': 'lib/leaflet-providers-1.0.5/leaflet-providers',
    'moment': 'lib/moment-2.6.0/moment.min',

    // Unit Testing
    'blanket': 'lib/blanket-1.1.5/blanket.min',
    'qunit': 'lib/qunit-1.14.0/qunit-1.14.0'
  },

  map: {
    '*': {
      'css': 'lib/require-css-0.1.2/css.min'
    }
  },

  shim: {
    // Layout
    'bootstrap': ['jquery', 'css!lib/bootstrap-3.2.0/css/bootstrap.min'],
    'jquery.gray': ['jquery', 'css!lib/gray-1.3.2/css/gray'],
    'jquery.growl': ['jquery'],

    // Space & Time
    'leaflet': {
      deps: ['css!lib/leaflet-0.7.2/leaflet'],
      exports: 'L'
    },
    'leaflet-providers': ['leaflet'],

    // Unit Testing
    'blanket': ['qunit'],
    'qunit': {
      deps: ['css!lib/qunit-1.14.0/qunit-1.14.0'],
      exports: 'QUnit'
    }
  }
};
