// With the above scripts loaded, you can call `tippy()` with a CSS
// selector and a `content` prop:
// tippy('[data-tippy-content]');

  // tippy('[data-tippy-content]', {
  //          arrow: false,
  //          allowHTML: true,
  //       });

  tippy('.tooltips', {
    content(reference) {
      const id = reference.getAttribute('data-template');
      const template = document.getElementById(id);
      return template.innerHTML;
    },
    allowHTML: true,
    interactive: true,
    maxWidth: 'none',
  });


      // tippy('.range', {
      //   content: 'My tooltip!',
      // });