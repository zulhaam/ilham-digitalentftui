.sticky-container {
padding: 0px;
margin: 0px;
position: fixed;
right: -160px;
top: 130px;
width: 200px;
}

.sticky li {
list-style-type: none;
background-color: #FFF;
color: #efefef;
height: 43px;
padding: 0px;
margin: 0px 0px 1px 0px;
-webkit-transition: all 0.25s ease-in-out;
-moz-transition: all 0.25s ease-in-out;
-o-transition: all 0.25s ease-in-out;
transition: all 0.25s ease-in-out;
cursor: pointer;
filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale");
filter: gray;
-webkit-filter: grayscale(100%);
}

.sticky li:hover {
margin-left: -115px;
filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'1 0 0 0 0, 0 1 0 0 0, 0 0 1 0 0, 0 0 0 1 0\'/></filter></svg>#grayscale");
-webkit-filter: grayscale(0%);
}

.sticky li img {
float: left;
margin: 5px 5px;
margin-right: 10px;
}

.sticky li p {
padding: 0px;
margin: 0px;
text-transform: uppercase;
line-height: 43px;
}
<div class="sticky-container">
      <ul class="sticky">
        <li> <a href="http://www.facebook.com/ZulhaamID/"> <img width="32" height="32" title="" alt="" src="img/fb1.png"/>
        <p>Facebook</p>
        </li>

        <li> <a href="http://www.twitter.com/Zulhaam23/"> <img width="32" height="32" title="" alt="" src="img/tw1.png" />
        <p>Twitter</p>
        </li>
        
        <li> <a href="http://www.path.com/"> <img width="32" height="32" title="" alt="" src="img/pin1.png"/>
        <p>Pinterest</p>
        </li>
        
        <li> <a href="http://www.Linkedin.com/"> <img width="32" height="32" title="" alt="" src="img/li1.png"/>
        <p>Linkedin</p>
        </li>
        
        <li> <a href="http://www.zulhaam.blogspot.com/"> <img width="32" height="32" title="" alt="" src="img/rss1.png"/>
        <p>RSS</p>
        </li>

        <li> <a href="http://www.Tumblr.com/"> <img width="32" height="32" title="" alt="" src="img/tm1.png"/>
        <p>Tumblr</p>
        </li>
        
        <li> <a href="http://www.WordPress.com/"> <img width="32" height="32" title="" alt="" src="img/wp1.png"/>
        <p>WordPress</p>
        </li>
        
        <li> <a href="http://www.Vimeo.com/"> <img width="30" height="32" title="" alt="" src="img/vm1.png"/>
        <p>Vimeo</p>
        </li>
      </ul>
    </div>
