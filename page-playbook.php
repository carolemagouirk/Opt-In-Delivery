<!DOCTYPE html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <link rel="stylesheet" type="text/css" href="<? echo get_template_directory_uri(); ?>/playbook-style.css" />
  <!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
  <link rel="apple-touch-icon" href="/favicon.png">
  <link rel="icon" href="/favicon.ico">
  <!--[if IE]>
      <link rel="shortcut icon" href="/favicon.ico">
    <![endif]-->
  <!-- or, set /favicon.ico for IE10 win -->
  <meta name="msapplication-TileColor" content="#f01d4f">
  <meta name="msapplication-TileImage" content="/favicon.png">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <title>
    <?php wp_title(' - ', true, 'right'); ?>
  </title>
  <!-- wordpress head functions -->
  <?php wp_head(); ?>
  <!-- end of wordpress head -->
</head>

<body <?php body_class(); ?>>
  <div id="wrapper" class="hfeed">
    <header class="site-header" role="banner">
      <img class="site-logo" src="<? echo home_url(); ?>/images/logo-dragon-small.png" />
      <nav class="site-nav">
        <a href="<? echo home_url(); ?>">What is Quest?</a>
      </nav>
    </header>

    <?php
      if ( isset($_REQUEST['subscriber'])) {
      ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      //If there's an orderId in the url, show the delivery content///////////////////////////////////////////////////
      ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      ?>

      <style>.site-header{display:none;}</style>
        <section id="hero" class="delivery">
          <div style="margin:8% auto 6%;" class="margin group">
            <img style="margin-top: 0;" class="audio-phone" src="/images/podcast-phone.png" width="260" height="auto">
              <h1 style="font-size:120px;margin: 120px auto 40px;">Thank You!</h1>
            <div class="audio-text">
              <p>Download the entire program or view the contents below.</p>
              <a class="button" href="#">Download</a><a class="button button-alt" href="#enroll">View Contents <img style="width:10px;" src="<? echo home_url(); ?>/images/down-arrow.svg" alt="Down Arrow to jump to content"></a>
            </div>
          </div>
        </section>

        <!-- ENROLL -->
        <section id="enroll" class="group">
          <img src="/images/program-alt.png" />
          
          <div class="payment-container group">
              <h3>
                <span>Contents</span>
              </h3>
              <h2>QUEST PLAYBOOK</h2>
              <ul>
                <p style="display:inline-block;text-align:center;width:100%;font-size:16px;margin:0 auto 30px;padding:0;">&nbsp;</p>
                <li style="text-align:center;list-style:none;">
                  <table style="margin:0 auto;">
                    <td style="padding: 0 20px 0 0;"><img src="/images/content-book.png" /></td>
                    <td>
                      <b style="font-size:46px;">The Playbook PDF</b><br />
                      <table style="margin:0 auto;">
                        <td style="padding: 0 20px 0 0;">
                          <a download class="button" href="/docs/quest-playbook.pdf" style="font-size:10px;padding: 15px 30px;">
                            <img style="-webkit-filter: invert(.9);filter: invert(.9);vertical-align:middle;width:20px;" src="https://png.icons8.com/small/30/000000/installing-updates.png">
                            DOWNLOAD
                          </a>
                        </td>
                        <td style="padding: 0 20px 0 0;">
                          <a target="_blank" class="button" href="/docs/quest-playbook.pdf" style="font-size:10px;padding: 15px 30px;">
                            <img style="-webkit-filter: invert(.9);filter: invert(.9);vertical-align:middle;width:20px;" src="https://png.icons8.com/small/30/000000/open-in-window.png">
                            VIEW PDF
                          </a>
                        </td>
                      </table>
                    </td>
                  </table>
                </li>
                <p style="display:inline-block;text-align:center;width:100%;font-size:16px;margin:60px auto 30px;padding:0;">{ start here }</p>
                <li style="text-align:center;list-style:none;">
                  <table style="margin:0 auto;">
                    <td style="padding: 0 20px 0 0;"><img src="/images/content-audio.png" /></td>
                    <td style="max-width: 350px;"><span style="font-size:24px;">CLIFFSNOTES MP3</span><br />
                      How to get started today<br />with this super fast explanation!</td>
                    <td style="padding: 0 0 0 20px;">
                      <a target="_blank" class="button" href="https://s3.amazonaws.com/jeneth/QUEST/cliffnotes-playbook.mp3" style="font-size:10px;padding: 5px 10px;display:block;">
                        <img style="-webkit-filter: invert(.9);filter: invert(.9);vertical-align:middle;width:20px;" src="https://png.icons8.com/small/30/000000/open-in-window.png">
                        LISTEN
                      </a>
                    </td>
                  </table>
                </li>
                <p style="display:inline-block;text-align:center;width:100%;font-size:16px;margin:60px auto 30px;padding:0;">{ then }</p>
                <li style="font-size:22px;text-align:left;list-style:none;">
                  <table style="margin:0 auto;">
                    <td style="padding: 0 20px 0 0;width:80px;"><img src="/images/content-video1.png" /></td>
                    <td style="max-width: 300px;">SHIFTING Comfort Zone to Creative Flow MP4</td>
                    <td>
                      <a target="_blank" class="button" href="https://www.youtube.com/embed/TJEjkrjnru4?rel=0&showinfo=0&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="font-size:10px;padding: 5px 10px;display:block;">
                        <img style="-webkit-filter: invert(.9);filter: invert(.9);vertical-align:middle;width:20px;" src="https://png.icons8.com/small/30/000000/open-in-window.png">
                        WATCH
                      </a>
                    </td>
                  </table>
                </li>
                <li style="font-size:22px;text-align:left;list-style:none;">
                  <table style="margin:0 auto;">
                    <td style="padding: 0 20px 0 0;width:80px;"><img src="/images/content-video2.png" /></td>
                    <td style="max-width: 300px;">How to STOP Fighting and START Flying MP4</td>
                    <td>
                      <a target="_blank" class="button" href="https://www.youtube.com/embed/EQj0g3YNhLI?rel=0&showinfo=0&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="font-size:10px;padding: 5px 10px;display:block;">
                        <img style="-webkit-filter: invert(.9);filter: invert(.9);vertical-align:middle;width:20px;" src="https://png.icons8.com/small/30/000000/open-in-window.png">
                        WATCH
                      </a>
                    </td>
                  </table>
                </li>
                <li style="font-size:22px;text-align:left;list-style:none;">
                  <table style="margin:0 auto;">
                    <td style="padding: 0 20px 0 0;width:80px;"><img src="/images/content-video3.png" /></td>
                    <td style="max-width: 300px;">DISCOVER your Flow Matrix SUPERPOWER MP4</td>
                    <td>
                      <a target="_blank" class="button" href="https://www.youtube.com/embed/gN3ZGZco7Ts?rel=0&showinfo=0&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="font-size:10px;padding: 5px 10px;display:block;">
                        <img style="-webkit-filter: invert(.9);filter: invert(.9);vertical-align:middle;width:20px;" src="https://png.icons8.com/small/30/000000/open-in-window.png">
                        WATCH
                      </a>
                    </td>
                  </table>
                </li>
                <p style="display:inline-block;text-align:center;width:100%;font-size:16px;margin:60px auto 30px;padding:0;">{ and }</p>
                <li style="text-align:center;list-style:none;">
                  <table style="margin:0 auto;">
                    <td style="padding: 0 20px 0 0;"><img src="/images/content-invite.png" /></td>
                    <td style="max-width: 350px;"><span style="font-size:24px;">YOU'RE INVITED!!</span><br />
                      This is your (in)formal invitation<br />to continue your Quest.</td>
                    <td style="padding: 0 0 0 20px;">
                      <a target="_blank" class="button" href="https://www.youtube.com/embed/mf1aOk9-Lso?rel=0&showinfo=0&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="font-size:10px;padding: 5px 10px;display:block;">
                        <img style="-webkit-filter: invert(.9);filter: invert(.9);vertical-align:middle;width:20px;" src="https://png.icons8.com/small/30/000000/open-in-window.png">
                        WATCH
                      </a>
                    </td>
                  </table>
                </li>
              </ul>
          </div>
          
          <div class="questions">
            <h4>Need Download Help Or Have Questions?</h4>
            <p>If you have questions or concerns about the playbook, please contact us at quest@jeneth.com.</p>
          </div>
        </section>

      <?php
      } elseif( isset($_REQUEST['email']) ) {
      ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
      //If there's NOT an orderId in the url, show sales letter content//////////////////////////////////////////////
      ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
      ?>
        
        <style>.site-header{display:none;}</style>
        <section id="hero">
          <div style="margin:10% auto 6%;" class="margin group">
            <img style="margin-top: 20px;" class="audio-phone" src="/images/podcast-phone.png" width="260" height="auto">
              <h1 style="font-size:120px;margin: 0 auto 40px;">Thank You!</h1>
            <div class="audio-text">
              <p>We've sent access details to your inbox, check your spam folder.</p>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/5fwBbyouVRk?rel=0&showinfo=0&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
        </section>
        
      <?php
      } else {
      ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
      //If there's NOT an orderId in the url, show sales letter content//////////////////////////////////////////////
      ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
      ?>


        <section id="hero">
          <div class="margin group">
            <img class="audio-phone" src="/images/podcast-phone.png" width="260" height="auto">
            <h1>Quest<br /><span>Playbook</span></h1>
            <div class="audio-text group">
              <p>Learn to navigate your life with our free playbook + video series...</p>
              <form method="post" class="af-form-wrapper" accept-charset="UTF-8" action="https://www.aweber.com/scripts/addlead.pl"  >
                <div style="display: none;">
                  <input type="hidden" name="meta_web_form_id" value="1747807571" />
                  <input type="hidden" name="meta_split_id" value="" />
                  <input type="hidden" name="listname" value="awlist4667788" />
                  <input type="hidden" name="redirect" value="" id="redirect_4d27ef7db913c2655857f109bc569d17" />
                  <input type="hidden" name="meta_redirect_onlist" value="http://quest.jeneth.com/playbook/" />
                  <input type="hidden" name="meta_adtracking" value="The_Quest_Playbook" />
                  <input type="hidden" name="meta_message" value="1001" />
                  <input type="hidden" name="meta_required" value="email" />
                  <input type="hidden" name="meta_forward_vars" value="1" />
                  <input type="hidden" name="meta_tooltip" value="" />
                </div>
                
                <!--input type="text" name="name" value="" placeholder="Your Name" tabindex="200" required-->
                <input type="text" name="email" value="" placeholder="Your Email" tabindex="201" required>
                <input class="button np inf-button" type="submit" name="submit" class="submit" value="Download" tabindex="202">
                
                <div class="af-element tag" style="display:none;"><input id="awf_tag-98211724" type="hidden" name="tag_98211724" value="playbook2018" /></div><div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=jOws7BwM7KzsjA==" alt="" /></div>
              </form>
            </div>
          </div>

          <a href="#enroll" class="learn-more down-arrow js-fade-element-show">
            Learn More
            <img src="<? echo home_url(); ?>/images/down-arrow.svg" alt="Down Arrow to jump to content">
		  </a>
        </section>

        <!-- ENROLL -->
        <section id="enroll" class="group">
            <h2>What is Quest Playbook?</h2>
            <p>
              Quest Playbook is an online workbook and video series designed to redirect your compass, clear your route, and give you the tools and techniques to navigate your life toward your personal bounty.
            </p>
          
          <img src="/images/program-alt.png" />
          
          <div class="payment-container group">
              <h3>
                <span>What's Inside</span>
              </h3>
              <h2>QUEST PLAYBOOK</h2>
              <ul style="margin-bottom:80px;">
                <p style="display:inline-block;text-align:center;width:100%;font-size:16px;margin:0 auto 30px;padding:0;">{ includes }</p>
                <li style="text-align:center;list-style:none;">
                  <table style="margin:0 auto;">
                    <td style="padding: 0 20px 0 0;"><img src="/images/content-book.png" /></td>
                    <td>
                      <b style="font-size:46px;">The Playbook PDF</b><br />
                      <table style="margin:0 auto;">
                        <td style="padding: 0 20px 0 0;">
                          <img style="-webkit-filter: invert(.9);filter: invert(.9);vertical-align:  middle;" src="https://png.icons8.com/small/30/000000/pdf-2.png">
                          <span style="font-size:16px;position:relative;top:4px;">PDF Format</span>
                        </td>
                        <td>
                          <img style="-webkit-filter: invert(.9);filter: invert(.9);vertical-align:  middle;" src="https://png.icons8.com/small/30/000000/print.png">
                          <span style="font-size:16px;position:relative;top:4px;">Printable</span>
                        </td>
                      </table>
                    </td>
                  </table>
                </li>
                <p style="display:inline-block;text-align:center;width:100%;font-size:16px;margin:60px auto 30px;padding:0;">{ plus 3 videos }</p>
                <li style="text-align:center;list-style:none;">
                  <table style="margin:0 auto;">
                    <td style="padding: 0 20px 0 0;"><img src="/images/content-audio.png" /></td>
                    <td style="max-width: 350px;"><span style="font-size:24px;">CLIFFSNOTES MP3</span><br />
                      How to get started today<br />with this super fast explanation!</td>
                  </table>
                </li>
                <p style="display:inline-block;text-align:center;width:100%;font-size:16px;margin:60px auto 30px;padding:0;">{ then }</p>
                <li style="font-size:22px;text-align:left;list-style:none;">
                  <table style="margin:0 auto;">
                    <td style="padding: 0 20px 0 0;width:80px;"><img src="/images/content-video1.png" /></td>
                    <td style="max-width: 300px;">SHIFTING Comfort Zone to Creative Flow MP4</td>
                  </table>
                </li>
                <li style="font-size:22px;text-align:left;list-style:none;">
                  <table style="margin:0 auto;">
                    <td style="padding: 0 20px 0 0;width:80px;"><img src="/images/content-video2.png" /></td>
                    <td style="max-width: 300px;">How to STOP Fighting and START Flying MP4</td>
                  </table>
                </li>
                <li style="font-size:22px;text-align:left;list-style:none;">
                  <table style="margin:0 auto;">
                    <td style="padding: 0 20px 0 0;width:80px;"><img src="/images/content-video3.png" /></td>
                    <td style="max-width: 300px;">DISCOVER your Flow Matrix SUPERPOWER MP4</td>
                  </table>
                </li>
                <p style="display:inline-block;text-align:center;width:100%;font-size:16px;margin:60px auto 30px;padding:0;">{ and }</p>
                <li style="text-align:center;list-style:none;">
                  <table style="margin:0 auto;">
                    <td style="padding: 0 20px 0 0;"><img src="/images/content-invite.png" /></td>
                    <td style="max-width: 350px;"><span style="font-size:24px;">BONUS VIDEO</span><br />
                      This is your (in)formal invitation<br />to continue your Quest.</td>
                  </table>
                </li>
              </ul>
              <a class="button" href="#subscribe">Get Access</a>
              <p style="margin-top:30px;"><em>Zero-risk, 100% Free Course</em></p>
          </div>
          
          <div class="questions">
            <h4>Need Tech Support Or Have Questions?</h4>
            <p>If you have questions or concerns about the playbook, please contact us at quest@jeneth.com.</p>
          </div>
        </section>

        <section id="audience">
          <h2>Who should use Quest Playbook?</h2>
          <p>YOU if you are aware: 1. You’re not playing big enough 2. You think you’re not good enough (or your programs aren’t good enough) 3. You’re not having fun anymore 4. You are bored, you are finding everything boring (or you are becoming boring)</p>
          <div class="main">
            <ul class="og-grid">
              <li>
                <img src="<? echo home_url(); ?>/images/jet.jpg" alt="Big Vision Lifestyle Entrepreneurs" width="250" height="250">
                <h4>Big Vision Lifestyle Entrepreneurs</h4>
                <p>Do you want to drop the resistance and reaction within your company and life? Do you want your staff to be more free flowing?</p>
              </li>
              <li>
                <img src="<? echo home_url(); ?>/images/home.jpg" alt="Home-Based Life Designers" width="250" height="250">
                <h4>Home-Based Life Designers</h4>
                <p>Are you ready to step into your potent message and claim it? Maybe you are looking for clarity and you are so tired of feeling insecure.</p>
              </li>
              <li>
                <img src="<? echo home_url(); ?>/images/travel.jpg" alt="Freelancers and Coaches" width="250" height="250">
                <h4>Freelancers, Life Coaches and Creatives</h4>
                <p>Do you desire to travel and make money across the global? Imagine writing and taking photography while you play!</p>
              </li>
            </ul>
          </div>
        </section>

        <section id="pros">
          <div class="margin">
            <h2>Who created Quest Playbook?</h2>
            <div class="about-box">
              <img alt="Jeneth Blackert" height="500" src="<? echo home_url(); ?>/images/jeneth.jpg" width="500">
              <h3>Jeneth Blackert</h3>
              <p>
                Hi, I'm <strong>Jeneth Blackert</strong>. I'm a wife, mother of two, author, entrepreneur, and a leader for conscious change running a seven-figure wellness and lifestyle business. But more importantly, I live and create my life in a way that allows me to be me without judgment, worthiness, or a lack of viewpoints.
              </p>
              <p>
                Simply by asking and receiving awareness.
              </p>
            </div>
            <img style="display:block;margin: 5em auto 0;" src="/images/as-seen-in.png" />
          </div>
        </section>

        <section id="praise">
          <div class="margin">
            <h2>Student Stories</h2>
            <div class="quotes">
              <blockquote class="group">
                <h4>"It's magical feeling the lightness and peace after each call."</h4>
                <img src=/images/Laya-Saul.jpg alt="Laya Saul" width=80 height=95>
                <div class=content>
                  <p>Jeneth has a way of talking and working with people that is calming and comforting; and at the same time she embraces humor and whimsy.</p>
                  <p>The idea is to let go of what is blocking you (what a relief!) and increase what supports you. All this with the wonderful voice, heart, and uncommon sense, did I mention grounded? -- that is Jeneth.</p>
                </div>
                <cite>
                  <span>Laya Saul</span><br />
                  Award winning author and speaker
                </cite>
              </blockquote>
              <blockquote class="group">
                <h4>"Learning about being - through business the Jeneth way - is simply a delightful journey!"</h4>
                <img src=/images/Georgette-Star.jpg alt="Georgette Star" width=80 height=95>
                <div class=content>
                  <p>"I discovered how Jeneth does it: How she cultivates expansive states of being that generate her thriving, ever-expanding, seven-figure business.</p>
                  <p>I learned energetic clearing tools to release whatever limits along the way, specific How-To's that I was able to implement right away, and to top it off, a wealth of support materials.</p>
                  <p>I was just starting to create my first telesummit when I entered the program. Jeneth provided what I needed to make the creation of my telesummit SO much easier."</p>
                </div>
                <cite>
                  <span>Georgette Star</span><br />
                  Maiden Spirit&trade; Founder
                </cite>
              </blockquote>
              <blockquote class="group">
                <h4>"Thank you Jeneth, for being a courageous warrior on the path from the head to the heart!"</h4>
                <img src=/images/Alecia-Evans.jpg alt="Alecia Evans" width=80 height=95>
                <div class=content>
                  <p>Thank you for being so generous to share your journey as a guiding light to all walking the uncharted path of the great mystery and reminding us of all the joy contained there.</p>
                  <p>I am so grateful for your willingness to be who you are and for you sharing your gifts, wisdom and beautiful heart with me and facilitating me on the blossoming of my path.</p>
                  <p>Yours in sisterhood, love and light!</p>
                </div>
                <cite>
                  <span>Alecia Evans</span><br />
                  Walk In Sync&trade; Founder
                </cite>
              </blockquote>
            </div>
          </div>
        </section>

        <section id="subscribe" class="group">
        <div>
          <h2 style="font-weight:normal;font-size:60px;color:#fff;margin-bottom:0;">Get Started Now</h2>
          <h3 style="font-weight:normal;color:#fff;">Quest Playbook is completely free, no purchase necessary.</h3>
        </div>
        <div class="payment-container group">
          <form method="post" class="af-form-wrapper" accept-charset="UTF-8" action="https://www.aweber.com/scripts/addlead.pl"  >
                <div style="display: none;">
                  <input type="hidden" name="meta_web_form_id" value="1747807571" />
                  <input type="hidden" name="meta_split_id" value="" />
                  <input type="hidden" name="listname" value="awlist4667788" />
                  <input type="hidden" name="redirect" value="" id="redirect_4d27ef7db913c2655857f109bc569d17" />
                  <input type="hidden" name="meta_redirect_onlist" value="http://quest.jeneth.com/playbook/" />
                  <input type="hidden" name="meta_adtracking" value="The_Quest_Playbook" />
                  <input type="hidden" name="meta_message" value="1001" />
                  <input type="hidden" name="meta_required" value="email" />
                  <input type="hidden" name="meta_forward_vars" value="1" />
                  <input type="hidden" name="meta_tooltip" value="" />
                </div>
                
                <!--input type="text" name="name" value="" placeholder="Your Name" tabindex="500" required-->
                <input type="text" name="email" value="" placeholder="Your Email" tabindex="501" required>
                <input class="button np inf-button" type="submit" name="submit" class="submit" value="Download" tabindex="502">
                
                <div class="af-element tag" style="display:none;"><input id="awf_tag-98211724" type="hidden" name="tag_98211724" value="playbook2018" /></div><div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=jOws7BwM7KzsjA==" alt="" /></div>
              </form>
            <script type="text/javascript">document.getElementById('redirect_4d27ef7db913c2655857f109bc569d17').value = document.location;</script>
        </div>
        <div class="questions">
          <h4>Need Tech Support Or Have Questions?</h4>
          <p>If you have questions or concerns about the playbook, please contact us at quest@jeneth.com.</p>
        </div>
      </section>

        <?php
      } 
      ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
      //END CHECK FOR ORDERID ///////////////////////////////////////////////////////////////////////////////////////
      ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
      ?>

          <!-- FOOTER -->
          <footer id="colophon" class="site-footer" role="contentinfo">
            &copy;
            <?php echo date('Y'); ?> Jeneth, LLC &#9679; <a href="mailto:<?php echo get_option( 'admin_email' ); ?>">Support</a>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          </footer>

  </div>
  <!-- .wrapper -->
  <script defer src="<? echo get_template_directory_uri(); ?>/script.js"></script>
  <?php wp_footer(); ?>
</body>

</html>