(function(api) {

  api.sectionConstructor['ovantis-upsell'] = api.Section.extend({
      attachEvents: function() {},
      isContextuallyActive: function() {
          return true;
      }
  });

  const ovantis_section_lists = ['banner', 'service'];
  ovantis_section_lists.forEach(ovantis_homepage_scroll);

  function ovantis_homepage_scroll(item) {
      item = item.replace(/-/g, '_');
      wp.customize.section('ovantis_' + item + '_section', function(section) {
          section.expanded.bind(function(isExpanding) {
              wp.customize.previewer.send(item, { expanded: isExpanding });
          });
      });
  }
})(wp.customize);