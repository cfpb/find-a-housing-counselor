Find a Housing Counselor
========================

The "Find a Housing Counselor" Front End allows users to find the 10 closest HUD-approved housing counselors by the centroid of a ZIP code. They can print those based on the results on the web page.

The front end of the application is powered by Javascript (including jQuery), and relies on [CFPB's Django HUD API](https://github.com/cfpb/django-hud) to return the results (in JSON) based on the zip code entered in the front end.

Screenshot
-------

![A screenshot of the front end of the Find a Housing Counselor page, complete with text, form fields and Google Maps integration](/screenshot.png "Screenshot of Find a Housing Counselor Front End.")

Requirements
-------
- [CFPB's Django HUD API](https://github.com/cfpb/django-hud) must be installed in a location where the Javascript can access it via an AJAX call.
- [jQuery](http://jquery.com/)
- The "Find a Housing Counselor" Front End uses the [Google Maps API](https://developers.google.com/maps/) to generate an interactive map. However, this feature could be removed without affecting the results. At this time, the code does not contain a setting or option to disable or remove the Google Maps API components.

Installation
--------
The "Find a Housing Counselor" Front End consists of a specific document object model (contained in the HTML file) and Javascript meant to manipulate the DOM. Installation can vary depending on implementation of the HTML and JS. However, a few settings at the top of the `main.js` file can be edited to simplify installation.

- **API url**: Found in the `main.js` file with the variable name `qurl`.
