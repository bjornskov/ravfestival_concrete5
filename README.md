# Ravfestival
Examproject for 2. semester of Multimedia Design. Website for the Amber festival of Vejers, Denmark.

## Content from report

### Website design

As of today the amber festival is available on the internet. It is maintained by a commercial development company called ProVarde. ProVarde got a website called VisitWestDenmark, where they write about stuff that is happening on the danish west coast. It is through this, that you can find a small portion of information about the amber festival. But as of today you are only able to find some basic information about the festival, no program for the weekend, no information about what the amber festival in general actually is. You are able to find a link to accommodation and a few links for the different local amber shops.
We wanted to make a website that is easy to navigate for everyone, so you do not have to be a super user of the internet. 
On the website you can find information about the dates of the festival, news, the program and how to get in touch with the festival.
When you enter the website, at the very top you will see the new logo, next to it the menu is placed for easy access to the different sites.
Beneath that there is a large hero video from last year’s festival, we have placed this as an appetiser, to give people a taste of the festival from their screens at home. 
in the middle of the hero we have placed a timer, counting down to the day the festival starts, this gives it a sense of anticipation.
You are then welcomed to the amber festival, a unique festival, the only one of its kind in Denmark, followed by the dates of the festival and a short description as to what will have on that given day.
When scrolling further down you come across a short video of some of the local amber enthusiast talking about their passion for amber.
A picture of amber, with information about the number of days, events and exhibitors, follows. And at the bottom we have the footer, where we have a little more information about the festival, but the main thing is the widgets of Facebook and Instagram. This is for people to have easy access to the social media platforms, so it is easy for people to like them on Facebook or follow them on Instagram.
We have three sub-pages; news, program and contact.
The news page, is where eventual news will be, everything from new events or products to keep people’s interest even when the festival is not running.
The next one is the program page, here you can find the entire program for the festival, the dates and location and if you click it you will be able to read a short description of that event.
We have decided to put it in a long list of clickable links, because when you have 26 events and have the entire description shown, then the page will become very long, and that chances that you will scroll down to see everything, is dramatically decreased.
The last page is the contact page, where you can contact the festival if you have any question that you would like answered.
There is also a separate contact form if you want to become a volunteer. We wanted to include this because they might increase the number of volunteers if it is easy to see how to contact them.

The font used on the website is called Roboto.
The headings on the site is is Robot Slab, a serif and we have used this because it is the same font we used in the logo.
The body text is also a Roboto, but a sans version of it, we used this to keep the fonts in the same style, but chose the sans version because it is easier to read and works better as a body text.


### Website programming

We have chosen to build up the website with the use of several different tools. In the following section we will describe how we used these tools and what we used each of them for.
#### Bootstrap (Bootstrap 2016)
The first tool we want to describe is Bootstrap. Bootstrap is a framework that makes it easy for web developers to develop responsive websites. The tool mainly consists of two different things, that generally makes the life of a web developer a lot easier. It contains a CSS (Cascading Style Sheet) file, that mostly helps with the design part of the website. Second it contains of a Javascript file, that helps with the functions of the website. Each of these are able to work together in a website, but are also able to work as two separate systems, if you for example do not want to implement the CSS file.
We have chosen Bootstrap among a lot of other frameworks, simply because it is well documented, and used in a wide range of other projects. It is developed by very skillful people at Twitter which ensures that the quality of the code is pretty good. This is important as the files in Bootstrap are relatively big, and we therefore off course want a very optimized code, both for the sake of stability and for the sake of speed at the website.
We have chosen to implement both the Javascript and CSS file of Bootstrap at our website. We are mostly using Bootstrap for the sizing of objects at the website but other classes of the stylesheet is being used as well, for example img-responsive and img-rounded. In the appendix 02 we will shortly explain, what happens when you use Bootstrap and how it is used.
All of the stuff available through Bootstrap is possible to add manually in our own CSS for our website. That could be smart to do, if for example you are only using two or three functions of Bootstrap and therefore implementing a lot of code that you will never use. But we are using a lot of different functions in Bootstrap and has therefore decided that it is worth the burden when downloading the website.
The Javascript file of Bootstrap allows us to make the menu available as a dropdown menu on smaller screens. Furthermore it allows us to make the dropdown window of the Program page at the website. The Javascript file is also used by Concrete5 for a lot of its client side features

#### Basic website
We had a criteria of having a video in the header of the website. The template we found had a version with full screen video, that allowed you to scroll down to see the content of the website. We wanted this to be a bit smaller, as we wanted the website to be useable by everyone, and not everyone is used to having a big video at the top and then be able to scroll down. Our fear was that most people would think it was the only content on the website and would not scroll down and see the rest.
We therefore decided to change the height of the #home div from 100% to 70%. Then the visitors was able to directly see, that there was more content and then scroll down and see the rest.
But we had another problem. The function that was used to show the YouTube video as background was really slow. It could take about 12-15 seconds before the video was loaded and played. That would give the visitors a pretty bad experience and we therefore wanted to have this changed.
It was not possible to speed up the process inside the existing Javascript and we therefore decided to implement another function for showing the video. We removed the YouTube plugin and decided to host the video file on our own server. An important thing to mention is that we checked if the server our website was placed on supported pseudostreaming, which allowed the video to start playing before the whole file was downloaded. Without that we would not have been able to do this, as the video file of the header is simply too big to download before playing even though we have optimized it.
We are using the Javascript vide.js that is freely available online (http://vodkabears.github.io/vide/) for showing the video. We implemented it so that it used the specific same div as endpoints for the video as the YouTube plugin did and got some really great load time speeds from doing this. As mobile devices are not yet supported to show background video and some people are on slow internet connections, we made use of the fallback function of vide.js. This allowed us to setup a normal banner for the background so that it shows this to the visitor until the video is ready for playback, if it will ever playback.

#### Concrete5 
After designing the basic website and how we wanted it to look, we decided to put the whole website into a CMS (Customer Managed System) to make it easier for both us, and the customer to edit the content of the website in the future.
What is and why use a CMS?
A CMS system is a system that allows the owner of a website to edit in the content of the website without any knowledge about the programming. A CMS will typically allow the customer to edit the site in a Word like way, and will make use of a so called WYSIWYG (What You See Is What You Get) editor where the user is able to click buttons and mark the text to make different formats of it. You will probably be able to compare the difference between using a CMS and not using a CMS system to the difference between using Microsoft DOS, where you had to input all commands by using a keyboard, to Microsoft Windows that for the first time allowed the user to be able to navigate in a graphical user interface and click with the mouse on the objects that the user wanted to change.
We have decided to make use of a CMS system for the sake of easiness in editing the website. This will both allow us, if we for example were a web agency to have a student worker to update the websites of our customers, but it would also allow the customer to edit the website by themselves. It can be a huge benefit, especially for a festival like this one, that has a program that is rapidly changing.
Choice of CMS system
We have decided to make use of the CMS system called Concrete5 for this project. There are many different CMS systems out there, Drupal, Joomla and Wordpress, just to name a few of them. Our choice of Concrete5 came into being because of its enormous usability. It is so user friendly, both in the programming part of the templates and especially in the part of editing the website for the customer.
When the user wants to edit a part of the website, the user just logs in with his username and passwords. He is now able to click the area he wants to edit and chooses edit mode. He will now get an editable textbox in the exact same place and in the exact same fonts and sizes as the original content, that he can change. After his change he just hits save and publish. The new content is now online and available at the web.
In for example Wordpress, you will often get the whole page and have to find the exact spot that you want to change. Furthermore the content is wrapped in another design so you have to imagine how it will look at the final page. Concrete5 has a huge benefit over this by showing exactly what the customer is going to receive before he saves it.
See appendix 03 for detailed descreption of how we designed our own blocks and themes for Concrete5.

#### Use of GitHub
In this project with the making of this website we have made use of Git connected up to Github. We have had two Github repositories, one for the static HTML and one for the C5 template.
In the start of the project we were able to use the Github Windows application in connection with Webstorm. When an edit was done we committed the change to Github and at Github we had made a little hook to a PHP script that automatically deployed the newest version of the repository to the server. 
When we moved on to making the template directly in the C5 installation on the live server, we created a new repository. We wanted to make sure to have versioning, if something was changed that messed up. Instead of working through Webstorm and the Github application we had Git installed at the server and committed changes to the project through a SSH connection in Putty. This way we committed the changes directly on the server.

#### The footer scripts
In the footer we have both a Facebook and a Instagram feed. The Facebook feed is an iframe for Facebook pages that are freely available form the developers department of the Facebook website:
https://developers.facebook.com/docs/plugins
The Instagram feed is showing the newest pictures hashtagged with the hashtag #ravfestival. We are here using a free version of the plugin called LightWidget that with a little help from some Javascript code downloads the newest pictures from a user or hashtag.
https://lightwidget.com/

### Conclusion

The Ravfestival is an annual festival with quite  a unique concept. There is no other festival of its kind in Denmark. It focuses on the baltic amber that washes up on the beach on the west coast but also the area in general, and has the potential to give visitors a fantastic experience, with learning, fun events and enjoy the danish nature.
At the  time, since it is so unique, it can be very difficult to attract people to a festival which subject is not an interest for the majority of people. 
By removing the focus a little bit from the amber, and focus on, having a nice time with your family, enjoying a weekend of learning, amber hunting, socialising, shopping and culinary experiences containing amber.
To ensure that more people will visit the festival, we have made a marketing strategy with both traditional marketing, such as posters and flyers that will make the festival visible in the local areas, so that everyone who does not know that it exists becomes aware of it. Content marketing on social media with videos and pictures that will capture the mood of the festival and entice people to take the trip to Blåvand and experience it for themselves.
We have designed a new visual image, based on our research findings, so that the festival will be easier to recognize, 
We have created a website so the festival has a place online where everyone interested can go and read about the festival, the dates, the events, potential news and there are direct links to the social media platforms that we have chosen. These social media platforms are Facebook, Instagram and Youtube. Facebook and Instagram will be for sharing pictures and videos, and furthermore Facebook will be an interactive tool for the festival to connect with people. The Youtube channel is for videos, it is a growing platform that is perfect for content marketing.
We believe that by implementing these ideas, that it can help raise the awareness and raise the participant count by 20% and help the festival to continue to be an annual event. 
