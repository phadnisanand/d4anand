// my_theme/components/fetch-component/fetch-component.js

((Drupal, once) => {
  Drupal.behaviors.fetchComponent = {
    attach(context) {
      // Ensure the script runs only once for the element within the given context
      once('fetch-component', '.fetch-component', context).forEach((element) => {
        const dataPlaceholder = element.querySelector('.data-placeholder');
        
        // Use the Fetch API to get data from a Drupal endpoint (example: an article list)
        fetch('/expose-blocks')
          .then(response => response.json())
          .then(data => {		  
			  let ele = '<ul>';
			  data.forEach(user => {
				  ele += '<li>'+ '<h2>' + user.info +'</h2>' + '<p>' + user.body + '</p></li>'
			  })
			  ele+='</ul>';
			  dataPlaceholder.innerHTML = ele;
          })
          .catch(error => {
            console.error('Error fetching data:', error);
            dataPlaceholder.textContent = 'Failed to load data.';
          });
      });
    },
  };
})(Drupal, once);
