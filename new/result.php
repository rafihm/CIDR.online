
<!doctype html>


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Check the load speeds of and information of a given website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/manifest.json">
    <link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#68c1b9">
    <meta name="theme-color" content="#ffffff">
    <title>Byte Check - TTFB Results</title>

    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="styles/material-overrides.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
<div class="byte-check-website website-check mdl-layout mdl-js-layout mdl-color--grey-200">
    <header class="byte-check-header mdl-layout__header">
        <div class="byte-check-header-content-result-page">
            <a href="/"><img class="byte-check-logo" src="images/logo-ed4.svg"/></a>
            <div class="mdl-typography--headline mdl-typography--text-center">CIDR Calculator</div>
        </div>

        <form method="get" action="result.php">
            <div class="byte-check-input mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-color-text--blue-grey-600 mdl-shadow--2dp">
                <input class="mdl-textfield__input" type="text" id="url-check" value="" name="inCIDR" pattern="^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])(\/([1-9]|[1-2][0-9]|3[0-2]))$">
                <label class="mdl-textfield__label" for="url-check">Enter IPv4 CIDR</label>
                <span class="mdl-textfield__error">Invalid CIDR</span>
                <button id="byte-check-input-go" type="submit"
                        class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--amber mdl-button--icon">
                    <i class="material-icons">arrow_forward</i>
                </button>
            </div>
        </form>
    </header>
    
    <main class="byte-check-content mdl-layout__content mdl-color-text--blue-grey-600">
        <section class="byte-check-main-section section--center">

            <div class="byte-check-results mdl-grid">
                <div class="mdl-cell mdl-cell--4-col byte-check-summary-container">
                    <!-- <div class="mdl-card byte-check-summary zoomIn">
                        <div class="byte-check-summary-top">
                            <div class="byte-check-website-image" id="website-image"></div>
                            <div class="byte-check-website-rating mdl-color-text--white two-star">
                                <i class="material-icons md-18">star</i>
                                <i class="material-icons md-18">star</i>
                                <i class="material-icons md-18">star</i>
                                <i class="material-icons md-18">star</i>
                                <i class="material-icons md-18">star</i>
                            </div>
                            <a href="https://www.google.com/?gws_rd=ssl" target="_blank"
                               class="byte-check-website-address mdl-typography--subhead mdl-color-text--primary mdl-typography--text-center">https://www.google.com/?gws_rd=ssl</a>
                        </div>
                        <div class="byte-check-summary-bottom mdl-grid mdl-grid--no-spacing">
                            <div id="byte-check-load-time" class="mdl-cell mdl-cell--6-col">
                                
                                <div class="byte-check-info-value mdl-typography--subhead">600 ms
                                </div>
                                <div class="byte-check-info-label mdl-typography--caption-color-contrast">TTFB
                                </div>
                                <div class="mdl-tooltip" for="byte-check-load-time">
                                    The total amount of<br>time it took to<br>receive the first byte
                                </div>
                            </div>
                            <div id="byte-check-page-size" class="mdl-cell mdl-cell--6-col">
                                
                                <div class="byte-check-info-value mdl-typography--subhead">600 ms</div>
                                <div class="byte-check-info-label mdl-typography--caption-color-contrast">Total Time
                                </div>
                                <div class="mdl-tooltip" for="byte-check-page-size">
                                    The total amount of time<br>to receive the full request
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
                    <!-- duplicate of above commented code to show only selected values -->
                    <div class="mdl-card byte-check-summary zoomIn">
                        <div class="byte-check-summary-top">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                        <div class="byte-check-summary-bottom mdl-grid mdl-grid--no-spacing">
                            <div id="byte-check-load-time" class="mdl-cell mdl-cell--6-col">
                                
                            <br>
                            <br>

                            </div>
                            <div id="byte-check-page-size" class="mdl-cell mdl-cell--6-col">
                            <br>
                            <br>

                            </div>
                        </div>
                    </div>
                    
                    <!--
                    <div class="mdl-card zoomIn hosting">
                        <h4>Site Slow?</h4>
                        <p>It looks like your website is running a little slow. Have you considered switching hosting providers?</p>
                        <p><a href="https://url.bytecheck.com/5b695a8360e0a/hosting/www.google.com/star-2" target="_blank">Upgrade your hosting today</a>.</p>
                    </div>
                    -->
                    <!-- duplicate of above commented code to show only selected values -->
                    <div class="mdl-card zoomIn hosting">
                        <br><br><br>
                        <br>
                        <br>
                        <br>
                    </div>
                    
                    <!--
                    <div class="mdl-card zoomIn sslexpire">
                        <h4>SSLs Expire!</h4>
                        <p>Great news, it looks like your site is running on https!</p>
                        <p>SSL Certificates usually expire after a year, and need to be replaced.</p>
                        <p>We have a great service which will remind you when your SSL is coming up for renewal, so you don't lose any traffic.</p>
                        <strong><a href="https://www.sslexpire.com/?domain=www.google.com" target="_blank" title="Website SSL Monitoring">Checkout SSLExpire.com</a></strong>
                    </div>
                    -->
                    <!-- duplicate of above commented code to show only selected values -->
                    <div class="mdl-card zoomIn sslexpire">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--8-col byte-check-details-container">
                    
<!-- php code to grab the json output for cidr -->
<?php
		require_once(__DIR__ . '/vendor/autoload.php');
		$combinedCIDR = $_GET["inCIDR"];
		$delimitor = '/';
		$splittedString = explode($delimitor, $combinedCIDR);
		$sub = new IPv4\SubnetCalculator($splittedString[0], $splittedString[1]);

		$number_ip_addresses    = $sub->getNumberIPAddresses();
		$jsonOutput = $sub->getSubnetJSONReport();
		#echo $jsonOutput;
        $decoded_json = json_decode($jsonOutput);
?>

    <!-- ------------first talbe------------ -->

                    <div class="mdl-card byte-check-waterfall" style="width: 100%">

                         <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width: 100%">
                                        <thead>
                                        <tr>
                                          <th class="byte-check-info-value mdl-typography--subhead" style="text-align:center;font-size: 22px">Subnet Info</th>
                                        </tr>
                                      </thead>
                        </table>
                                    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width: 100%">
                                      <tbody>
                                <?php
                                        echo '<tr>
                                          <th class="mdl-data-table__cell--non-numeric" style="font-size: 19px">' . $decoded_json->ip_address_with_network_size . '</th>
                                          <th class="byte-check-info-value mdl-typography--subhead" style="font-size: 19px">Quads</th>
                                          <th class="byte-check-info-value mdl-typography--subhead" style="font-size: 19px">Hex</th>
                                          <th class="byte-check-info-value mdl-typography--subhead" style="font-size: 19px">Binary</th>
                                        </tr>';
                                ?>
                                <?php        
                                        echo '<tr>
                                          <td class="mdl-data-table__cell--non-numeric" style="font-size: 15px">IP address</td>
                                          <td class="byte-check-info-value mdl-typography--subhead" style="font-size: 15px">' . $decoded_json->ip_address->quads . '</td>
                                        <td class="byte-check-info-value mdl-typography--subhead" style="font-size: 15px">' . $decoded_json->ip_address->hex . '</td>
                                        <td class="byte-check-info-value mdl-typography--subhead" style="font-size: 15px">' . $decoded_json->ip_address->binary . '</td>
                                        </tr>';
                                ?>
                                <?php        
                                        echo '<tr>
                                          <td class="mdl-data-table__cell--non-numeric" style="font-size: 15px">Subnet Mask</td>
                                          <td class="byte-check-info-value mdl-typography--subhead" style="font-size: 15px">' . $decoded_json->subnet_mask->quads . '</td>
                                        <td class="byte-check-info-value mdl-typography--subhead" style="font-size: 15px">' . $decoded_json->subnet_mask->hex . '</td>
                                        <td class="byte-check-info-value mdl-typography--subhead" style="font-size: 15px">' . $decoded_json->subnet_mask->binary . '</td>
                                        </tr>';
                                ?>
                                <?php        
                                        echo '<tr>
                                          <td class="mdl-data-table__cell--non-numeric" style="font-size: 15px">Network Portion</td>
                                          <td class="byte-check-info-value mdl-typography--subhead" style="font-size: 15px">' . $decoded_json->network_portion->quads . '</td>
                                        <td class="byte-check-info-value mdl-typography--subhead" style="font-size: 15px">' . $decoded_json->network_portion->hex . '</td>
                                        <td class="byte-check-info-value mdl-typography--subhead" style="font-size: 15px">' . $decoded_json->network_portion->binary . '</td>
                                        </tr>';
                                ?>
                                <?php        
                                        echo '<tr>
                                          <td class="mdl-data-table__cell--non-numeric" style="font-size: 15px">Host Portion</td>
                                          <td class="byte-check-info-value mdl-typography--subhead" style="font-size: 15px">' . $decoded_json->host_portion->quads . '</td>
                                        <td class="byte-check-info-value mdl-typography--subhead" style="font-size: 15px">' . $decoded_json->host_portion->hex . '</td>
                                        <td class="byte-check-info-value mdl-typography--subhead" style="font-size: 15px">' . $decoded_json->host_portion->binary . '</td>
                                        </tr>';
                                ?>
                                      </tbody>
                                    </table>

                    </div>
    <!-- ------------second talbe------------ -->
                        <div class="mdl-card byte-check-waterfall" style="width: 100%">

                         <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width: 100%">
                                        <thead>
                                        <tr>
                                          <th class="byte-check-info-value mdl-typography--subhead" style="text-align:center;font-size: 22px">IP Info</th>
                                        </tr>
                                      </thead>
                        </table>
                                    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width: 100%">
                                      <tbody>
                                        
                                          <tr>
                                          <th class="mdl-data-table__cell--non-numeric" style="font-size: 19px">Key</th>
                                          <th class="byte-check-info-value mdl-typography--subhead" style="font-size: 19px">Value</th>
                                        </tr>
                                <?php        
                                        echo '<tr>
                                          <td class="mdl-data-table__cell--non-numeric" style="font-size: 15px">Network Size</td>
                                          <td class="byte-check-info-value mdl-typography--subhead" style="font-size: 15px">' . $decoded_json->network_size . '</td>
                                        </tr>';
                                ?> 
                                <?php        
                                        echo '<tr>
                                          <td class="mdl-data-table__cell--non-numeric" style="font-size: 15px">Number Of IP addresses</td>
                                          <td class="byte-check-info-value mdl-typography--subhead" style="font-size: 15px">' . $decoded_json->number_of_ip_addresses . '</td>
                                        </tr>';
                                ?> 
                                <?php        
                                        echo '<tr>
                                          <td class="mdl-data-table__cell--non-numeric" style="font-size: 15px">Number Of Addressable IPs</td>
                                          <td class="byte-check-info-value mdl-typography--subhead" style="font-size: 15px">' . $decoded_json->number_of_addressable_hosts . '</td>
                                        </tr>';
                                ?> 
                                <?php        
                                        echo '<tr>
                                          <td class="mdl-data-table__cell--non-numeric" style="font-size: 15px">IP Address Range</td>
                                          <td class="byte-check-info-value mdl-typography--subhead" style="font-size: 15px">' . $decoded_json->ip_address_range . '</td>
                                        </tr>';
                                ?> 
                                <?php        
                                        echo '<tr>
                                          <td class="mdl-data-table__cell--non-numeric" style="font-size: 15px">Min Host</td>
                                          <td class="byte-check-info-value mdl-typography--subhead" style="font-size: 15px">' . $decoded_json->min_host . '</td>
                                        </tr>';
                                ?> 
                                <?php        
                                        echo '<tr>
                                          <td class="mdl-data-table__cell--non-numeric" style="font-size: 15px">Max Host</td>
                                          <td class="byte-check-info-value mdl-typography--subhead" style="font-size: 15px">' . $decoded_json->max_host . '</td>
                                        </tr>';
                                ?> 
                                <?php        
                                        echo '<tr>
                                          <td class="mdl-data-table__cell--non-numeric" style="font-size: 15px">Broadcast Address</td>
                                          <td class="byte-check-info-value mdl-typography--subhead" style="font-size: 15px">' . $decoded_json->broadcast_address . '</td>
                                        </tr>';
                                ?> 
                                      </tbody>
                                    </table>

                    </div>
                    
                    <div class="mdl-card zoomIn fortifi">
                        <h4>Advertise your business Here</h4>
                        <p style="font-size: 17px">Write to us at - <code style="font-size: 20px">slashhash.webservices@gmail.com</code>
                    </div>
                </div>
            </div>
        </section>
        
        <footer class="byte-check-footer">
            <span class="mdl-typography--caption-color-contrast">© Copyright 2009-2017 Lucid Cube</span>
            <a href="http://www.lucidcube.com/" target="_blank" title="Brought to you by Lucid Cube"
               class="lucid-cube-link">
                <img src="images/lucid_cube_dark.png"/>
            </a>
        </footer>
    </main>
</div>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-97697167-2', 'auto');
    ga('send', 'pageview');

</script>
<script type="text/javascript">
    var src = 'http://urlgrab.com/site.png?w=240&h=180&url=google.com';
    img = new Image();
    img.onload = function () {
        document.getElementById('website-image').style.backgroundImage = 'url(' + src + ')';
    };
    img.src = src;
</script>
</body>
</html>
