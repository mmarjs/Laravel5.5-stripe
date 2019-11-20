@extends('shared._layout-main')
@section('title','Help Center - GigHighway')
@section('header-scripts')
    <style>
        ul li {
            list-style-type: none;
        }
        ul {
            margin-left:40px;
        }

        .anchor {
            display: block;
            position: relative;
            height: 123px;
            margin-top: -123px;
            visibility: hidden;
        }

        @
        @media (max-width: 768px) {
            .anchor {
                height: 64px;
                margin-top: -64px;
            }
        }

        ul, ol {
            margin-left: 40px;
        }

        .sectionContent {
            border: 1px solid #f1efef;
            padding: 0 13px;
        }

        .helpCenter_Content h4 {
            color: #4CAF50;
        }

        .sectionContent h5 {
            font-size: 14px;
            font-weight: 500;
        }

        .sectionContent p {
            margin-left: 0;
        }

        .sectionContent ul, .sectionContent a {
            -ms-word-break: break-word;
            word-break: break-word;
        }
    </style>
@endsection
@section('main-body')

    <div class="col-sm-12 helpCenter_Content">
        <h1>GigHighway Help</h1>

        <hr/>

        <h2>Help for Clients</h2>

        <h3>Searching for Vendors</h3>
        <ul>
            <li><a href="#How_to_Get_Started">How to Get Started</a></li>
            <li><a href="#How_to_Search_for_Vendors">How to Search for Vendors</a></li>
            <li><a href="#Entertainers_and_Vendors">Entertainers and Vendors</a></li>
        </ul>

        <h3>Booking Vendors</h3>
        <ul>
            <li><a href="#Requesting_Quotes_from_Vendors">Requesting Quotes from Vendors</a></li>
            <li><a href="#How_to_Book_Vendors">How to Book Vendors</a></li>
            <li><a href="#How_to_Leave_Reviews">How to Leave Reviews</a></li>
        </ul>

        <h3>Contact</h3>
        <ul>
            <li><a href="#Security_and_Policies">Security and Policies</a></li>
            <li><a href="#How_to_Login">How to Login</a></li>
            <li><a href="#How_to_Contact_Vendors">How to Contact Vendors</a></li>
        </ul>

        <h2>Help for Members</h2>

        <h3>Gigs/Bookings</h3>
        <ul>
            <li><a href="#How_to_Submit_a_Quote">How to Submit a Quote</a></li>
            <li><a href="#Quote_Requests">Quote Requests</a></li>
            <li><a href="#Payments">Payments</a></li>
            <li><a href="#Cancelling_an_Event">Cancelling an Event</a></li>
            <li><a href="#Reviews_from_Clients">Reviews from Clients</a></li>
            <li><a href="#Booking_Gigs">Booking Gigs</a></li>
        </ul>

        <h3>Creating a Profile</h3>
        <ul>
            <li><a href="#Background_Checks">Background Checks</a></li>
            <li><a href="#Search_Results">Search Results</a></li>
            <li><a href="#Member_Vendor_Ratings">Member/Vendor Ratings</a></li>
            <li><a href="#Videos">Videos</a></li>
            <li><a href="#Images">Images</a></li>
            <li><a href="#Audio">Audio</a></li>
            <li><a href="#Profile_Content">Profile Content</a></li>
        </ul>

        <h3>Memberships</h3>
        <ul>
            <li><a href="#Contacting_GigHighway">Contacting GigHighway</a></li>
            <li><a href="#Logging_In">Logging In</a></li>
            <li><a href="#Dashboard">Dashboard</a></li>
            <li><a href="#Featured_Profiles">Featured Profiles</a></li>
            <li><a href="#Social_Media">Social Media</a></li>
            <li><a href="#Memberships">Memberships</a></li>
        </ul>


        <hr/>


        <h2>Help for Clients</h2>

        <h3>Searching for Vendors</h3>

        <span class="anchor" id="How_to_Get_Started"></span><h4>How to Get Started</h4>
        <div class="sectionContent">
            <h5>What is GigHighway?</h5>
            <p>GigHighway is a premier event booking service. We make it possible for event planners and Clients to find
                and book the perfect entertainment or Service Providers for their event, while also helping GigHighway
                Vendors get more exposure, leads, and gigs. Whether you're planning a wedding, birthday party, corporate
                event, or other special celebration, our Vendors are ready to make it an event to remember.</p>
            <h5>How does GigHighway work?</h5>
            <p>GigHighway allows people to search for, find, contact, and book world-class entertainment and Service
                Providers (Vendors). Here are the steps:</p>
            <ol>
                <li>Search by entering the type of entertainment or Service Provider and location on the GigHighway home
                    page: <a href="/">https://www.gighighway.com</a></li>
                <li>Browse the results and compare the various Vendors by studying photos, videos, audio samples,
                    descriptions, and reviews of their services.
                </li>
                <li>
                    To request a quote from a Vendor, simply:
                    <ol>
                        <li>Click the "REQUEST A FREE QUOTE" button, or</li>
                        <li>Click the "Add to Favorites" button to add a Vendor to your "FAVORITES" list, which allows
                            you to request quotes for multiple Vendors all at once.
                        </li>
                        <li>The Vendor will contact you by email or phone, depending on what contact information you
                            used when requesting the quote.
                        </li>
                    </ol>
                </li>
                <li>Once contacted by a Vendor, you will be able to deal with that Vendor directly. When you have
                    reached an agreement with a Vendor, you will be able to book their services directly through them,
                    eliminating the need to pay a commission to GigHighway.
                </li>
                <li>Enjoy the party.</li>
            </ol>
            <h5>Why use GigHighway?</h5>
            <p>Clients use GigHighway because they know they can find world-class entertainment and Vendors easily and
                quickly. Entertainers and Vendors use GigHighway because they know they will get more exposure, leads,
                and gigs for a fraction of the cost of other booking services. Plus, GigHighway allows direct contact
                between Clients and Vendors and does not charge a booking fee or commission, as do other booking
                services, thereby allowing Vendors to charge less and Clients to pay less.</p>
        </div>
        <a href="#" class="backToTop">Back to Top</a>

        <span class="anchor" id="How_to_Search_for_Vendors"></span><h4>How to Search for Vendors</h4>
        <div class="sectionContent">
            <h5>How can I find out what a Vendor charges?</h5>
            <p>Prices are unique to every event and therefore must come directly from the Vendors. After requesting a
                quote from an Entertainer or Vendor, that Entertainer or Vendor will contact you and provide you with a
                quote for their services, assuming they have enough information to do so. If they do not have sufficient
                information about your event to offer a quote, getting the information necessary to submit a quote is
                possible through direct communication between you and the Vendor.</p>
            <h5>I could not find my city or state when searching. What can I do?</h5>
            <p>Only searches in the United States are accepted. It is not possible to enter a location outside of the
                United States.</p>
            <h5>How can I view a Vendor's Profile?</h5>
            <p>After performing a search, click on the photo or Profile link found in one of the search results. Click
                on the "REQUEST A FREE QUOTE" button to request a quote from that Vendor.</p>
            <h5>I searched, but there were no results. Why?</h5>
            <p>This happens when we have no Entertainers or Service Providers in that category or in your location. Try
                a new search using a different, but similar category.</p>
            <h5>How does GigHighway order their search results?</h5>
            <p>Our search results are based on several factors including location, category, listing type, and Vendor
                reviews. Our goal is to give you the best and most relevant results first.</p>
            <h5>Where are reviews for the Entertainers and Vendors?</h5>
            <p>If an Entertainer or Vendor has received reviews from Clients, those reviews will appear on that
                Entertainer's or Vendor's Profile page.</p>
            <h5>How come some search results are for Vendors thousands of miles away?</h5>
            <p>Some of our Entertainers and Vendors are willing to travel. It may cost a bit more to pay for their
                travel expenses, but sometimes it's worth it. As an example, if a Client is looking for the best dance
                band to perform at their wedding reception, they may prefer to fly in a top band rather than hire a
                local band.</p>
        </div>
        <a href="#" class="backToTop">Back to Top</a>

        <span class="anchor" id="Entertainers_and_Vendors"></span><h4>Entertainers and Vendors</h4>
        <div class="sectionContent">
            <h5>Do you do background checks on your Entertainers or Vendors?</h5>
            <p>GigHighway Members are not required to submit background checks, and therefore Clients are not able to
                request them.</p>
            <h5>I clicked on a Vendor Profile. How can I go back to my original search results?</h5>
            <p>Click the back button in your browser.</p>
            <h5>I cannot hear the audio samples or view videos. What is wrong?</h5>
            <p>Some media files may not be compatible with your browser. GigHighway recommends using the latest version
                of Google Chrome, Mozilla Firefox, or Internet Explorer.</p>
        </div>
        <a href="#" class="backToTop">Back to Top</a>

        <h3>Booking Vendors</h3>

        <span class="anchor" id="Requesting_Quotes_from_Vendors"></span><h4>Requesting Quotes from Vendors</h4>
        <div class="sectionContent">
            <h5>How do I request a quote from an Entertainer or Vendor?</h5>
            <p>Click the "REQUEST A FREE QUOTE" button located on a search result or on a Vendor's Profile page. You can
                also click the "ADD TO FAVORITES" button located on a search result or on a Vendor's Profile page, which
                adds that Vendor to your "FAVORITES" list. Once you have added all your favorites to your "FAVORITES"
                list, you can then request a quote from all of your favorites at once.</p>
            <h5>How do I request additional quotes from Vendors?</h5>
            <p>Anytime you request a quote from an Entertainer or Vendor, you have the option to receive additional
                quotes from similar Entertainers or Vendors on the "REQUEST A FREE QUOTE" form. By choosing to receive
                additional quotes from similar Vendors you increase your chances of finding the perfect Entertainment or
                Vendor for your event.</p>
            <h5>Do I have to hire one of the Vendor's from whom I've received a quote?</h5>
            <p>You have absolutely no obligation to hire an Entertainer or Vendor that you've contacted through
                GigHighway.</p>
            <h5>Are price quotes negotiable?</h5>
            <p>Yes. Clients deal directly with Entertainers or Vendors, and therefore Clients can negotiate with them.
                Depending on the event, Entertainers or Vendors may change their quote amounts, but are not required
                to.</p>
            <h5>I received a quote from a Vendor. What now?</h5>
            <p>GigHighway is unique in that we allow direct contact between Clients and Vendors without GigHighway
                taking a commission. When requesting quotes from Entertainers or Vendors, a Client has the option to
                click the "REQUEST A FREE QUOTE" button or use the contact information provided on a Profile page to
                contact the Entertainer or Vendor directly. Once a quote has been received from a Vendor, a Client can
                then email or phone that Vendor to ask questions, negotiate prices, negotiate services, or book that
                Vendor directly.</p>
            <h5>Do I have to hire the Vendor that gives me the lowest quote?</h5>
            <p>No. You are not required to choose any of the Vendors that gave you a quote. You are free to hire any
                Vendor that submitted a quote to you, whether their quote was highest or lowest. The quotes you receive
                are not binding, but are a way for you to get an idea of the Vendor's pricing. Once you have chosen a
                Vendor, you are free to contact them directly to discuss payment details.</p>
            <h5>Why am I receiving quotes from Vendors I didn't request quotes from?</h5>
            <p>When you request a quote from a Vendor you have the option to receive additional quotes from similar
                Vendors. If you chose that option you will receive additional quotes from other similar Vendors. When
                filling out the "REQUEST A FREE QUOTE" form, the default value for receiving additional free quotes from
                similar Vendors is 5, but this can be changed to "10" or "None."</p>
            <h5>Will I receive a quote from all the Vendors I requested a quote from?</h5>
            <p>Not always. Some Entertainers or Vendors may already be booked on your event date and therefore will not
                be available. The best way to find the perfect entertainment or Vendor for your event is to request
                quotes from multiple Entertainers or Vendors.</p>
            <h5>If I contact multiple Vendors, will I receive a reply from all of them?</h5>
            <p>Not always. Even though you can expect to receive a reply from all contacted Vendors, this isn't always
                the case. Due to many reasons, it's possible that a Vendor may not reply. Finding the perfect
                Entertainer or Vendor for an event is best achieved by requesting multiple Vendor quotes.</p>
        </div>
        <a href="#" class="backToTop">Back to Top</a>

        <span class="anchor" id="How_to_Book_Vendors"></span><h4>How to Book Vendors</h4>
        <div class="sectionContent">
            <h5>How do I pay my booking fee?</h5>
            <p>Once you have chosen the perfect Entertainer or Vendor for your event, all financial arrangements will be
                discussed and agreed to directly with that Entertainer or Vendor. Some Vendors will want a 50% deposit
                to hold the date, some will require payment in full before the event date, some will take personal
                checks, some will take credit cards, etc. All discussions concerning payment details will be handled
                directly between the Client (you) and the Entertainer or Vendor.</p>
            <h5>Does GigHighway provide contracts?</h5>
            <p>GigHighway does not provide contracts. Please ask your Entertainer or Vendor to provide a contract.</p>
            <h5>I want to hire a Vendor. What do I do?</h5>
            <p>Contact the Entertainer or Vendor and tell them you've decided to hire them. Make sure you have agreed on
                a price and that they are available for your event on the correct date and at the correct time.</p>
            <h5>I was asked to provide a non-refundable deposit. Should I pay the deposit?</h5>
            <p>When booking an Entertainer or Vendor it is usual and customary to pay a deposit to lock out the date. As
                long as there is a signed contract between the two parties, it is OK to pay a deposit to hold the
                date.</p>
            <h5>Does GigHighway charge a booking fee?</h5>
            <p>No. GigHighway works differently than other premier booking services. Instead of complicating the
                Client-Vendor relationship by running everything through GigHighway, GigHighway allows Clients and
                Vendors to negotiate directly, thus eliminating GigHighway as a middleman. This means no hidden fees or
                commissions from GigHighway, and a smoother experience for both Clients and Vendors. It also means lower
                prices for Clients when booking Entertainers or Vendor's services, because no commission from GigHighway
                is tacked on.</p>
        </div>
        <a href="#" class="backToTop">Back to Top</a>

        <span class="anchor" id="How_to_Leave_Reviews"></span><h4>How to Leave Reviews</h4>
        <div class="sectionContent">
            <h5>After my event, how do I leave a review for my Entertainer or Vendor?</h5>
            <p>Leaving a review for an Entertainer or Vendor is very quick and easy. Just click the "WRITE A REVIEW"
                button on an Entertainer's or Vendor's Profile page and follow the directions. Only authentic Clients
                are allowed to leave a review for a Vendor.</p>
        </div>
        <a href="#" class="backToTop">Back to Top</a>

        <h3>Contact</h3>

        <span class="anchor" id="Security_and_Policies"></span><h4>Security and Policies</h4>
        <div class="sectionContent">
            <h5>Where is the GigHighway Privacy Policy?</h5>
            <p><a href="/privacypolicy/">https://www.gighighway.com/privacypolicy/</a></p>
            <h5>Where is the GigHighway Terms of Use (User Agreement)?</h5>
            <p><a href="/termsofuse/">https://www.gighighway.com/termsofuse/</a></p>
            <h5>Is the GigHighway site secure?</h5>
            <p>Like other reputable online websites, GigHighway uses SSL to protect personal information, the same
                protection offered by most financial institutions for their online Clients.</p>
            <h5>Are cookies used by GigHighway? If so, how?</h5>
            <p>GigHighway.com uses cookies to keep track of certain items for the purpose of improving your browsing
                experience. For example, cookies are used to keep track of your "FAVORITE" Entertainers or Vendors. It
                also makes it possible for you to click the back button in your browser to return you to the results
                page you were previously viewing. If you need instructions for enabling cookies in your browser, please
                see the help section for your specific browser.</p>
        </div>
        <a href="#" class="backToTop">Back to Top</a>

        <span class="anchor" id="How_to_Login"></span><h4>How to Login</h4>
        <div class="sectionContent">
            <h5>How do I login to my account's control panel?</h5>
            <p>Go to <a href="/">https://www.gighighway.com</a> and click the "Sign In" button.</p>
            <h5>What do I do if I forgot my username or password?</h5>
            <p>Go to <a href="/">https://www.gighighway.com</a>, click the "Sign In" button, click "Forgot your
                password?" and enter the requested information.</p>
            <h5>Can I change my account password?</h5>
            <p>Yes. Login to your account's control panel and follow these steps:</p>
            <ol>
                <li>Click your name at the top of the page to display the drop-down menu and then select "Account".</li>
                <li>Enter a new password and click "UPDATE."</li>
            </ol>
            <h5>Can I change my username?</h5>
            <p>Yes. Login to your account's control panel and follow these steps:</p>
            <ol>
                <li>Click the "EDIT" or "EDIT PROFILE" link to edit your Profile.</li>
                <li>Enter a new "Act or Business Name."</li>
                <li>Click "SAVE AND CONTINUE."</li>
            </ol>
        </div>
        <a href="#" class="backToTop">Back to Top</a>

        <span class="anchor" id="How_to_Contact_Vendors"></span><h4>How to Contact Vendors</h4>
        <div class="sectionContent">
            <h5>How do I contact a Vendor?</h5>
            <p>There are different ways to contact a Vendor. One option is to click the "REQUEST A FREE QUOTE" button
                and send them a request for a free quote. Also, on the Vendor's Profile page they may list a phone
                number, an email address, and/or a website URL as contact methods. Depending on what information is
                listed on an Entertainer's or Vendor's Profile page, you may use any of these methods to contact them.
                Because Clients book Vendors directly, Clients should not contact GigHighway, but instead contact
                Vendors directly by using the contact information provided on their specific Profile pages.</p>
            <h5>Do I need to submit a phone number or email to request a free quote?</h5>
            <p>All quotes come from our Entertainers and Vendors directly, so an email or phone number is required to
                request a quote. You are not required to list a phone number, but we recommend doing so because it is
                much easier to communicate with Vendors that way.</p>
            <h5>I want to request quotes from additional Vendors. How do I do this?</h5>
            <p>After clicking the "REQUEST A FREE QUOTE" button you will have the option to receive quotes from
                additional, similar Entertainers or Vendors. Simply choose the option that corresponds to the number of
                additional quotes you want to receive.</p>
            <h5>How long after requesting a quote before I hear back from a Vendor?</h5>
            <p>We strongly encourage Vendors to respond to quote requests as quickly as possible. Some quotes may come
                within a matter of minutes, some within 24 hours, and some after 24 hours.</p>
        </div>
        <a href="#" class="backToTop">Back to Top</a>

        <h2>Help for Members</h2>

        <h3>Gigs/Bookings</h3>

        <span class="anchor" id="How_to_Submit_a_Quote"></span><h4>How to Submit a Quote</h4>
        <div class="sectionContent">
            <h5>How do I submit a quote?</h5>
            <p>Clients have two ways to request a quote from a Member. First, a Client can request a quote by clicking
                on the "REQUEST A FREE QUOTE" button. When a Client requests a quote in this manner, they are required
                to enter their contact information. A Member can then contact the Client directly, using the Client's
                contact information, to offer a quote or ask for any additional information that's needed before giving
                a quote.</p>
            <p>A Client can also contact the Member directly by using the contact information on that Member's Profile
                page. Through direct communication with the Client, a Member can then offer a quote or ask for any
                additional information that's needed before giving a quote.</p>
            <h5>Should I have the Client pay me a deposit?</h5>
            <p>As a general rule, GigHighway recommends that Members require Clients to pay a deposit. This protects
                both the Member and Client.</p>
            <h5>Should the deposit be non-refundable?</h5>
            <p>As a general rule, GigHighway recommends that Members request non-refundable deposits from Clients. This
                protects the Member. Locking out a date for a Client prevents Members from booking that same date with
                other potential Clients. If a Client, who has paid a non-refundable deposit, chooses to cancel the event
                at a late date, it may be too late for that Member to rebook that same date, and therefore it's
                reasonable for the Member to receive compensation for turning down other paying Clients.</p>
            <h5>How do I figure in travel expenses?</h5>
            <p>If you will be providing your services outside of your local area, and travel expenses are required, you
                should tell the Client that you need to be compensated for the extra expenses. In addition to your
                normal performance fee or service fee, be sure to include in your quote all additional expenses such as
                airfare, ground transportation, hotel, meals, and other miscellaneous expenses.</p>
        </div>
        <a href="#" class="backToTop">Back to Top</a>

        <span class="anchor" id="Quote_Requests"></span><h4>Quote Requests</h4>
        <div class="sectionContent">
            <h5>If I'm already booked on a date, can I prevent quotes from being sent to me for that date?</h5>
            <p>Not currently.</p>
            <h5>How do potential Clients contact me for quotes?</h5>
            <p>Clients can contact Entertainers or Vendors by clicking the "REQUEST A FREE QUOTE" button and sending a
                request, or by using the contact information listed on a Vendor's Profile page to contact a Vendor
                directly.</p>
            <h5>I'm not getting enough leads. Why not?</h5>
            <p>There are many ways to increase the number of potential Clients that see your result or Profile, which
                can in turn result in more quote requests.</p>
            <ol>
                <li>Featured listings, as a general rule, appear before non-Featured listings, and will therefore get
                    more exposure, and in most cases more quote requests. This is perhaps the best and easiest way to
                    get more leads.
                </li>
                <li>If you are located in a sparsely populated area, there may be fewer opportunities for gigs.
                    Increasing your "Travel Distance" can increase exposure and your number of quote requests. Changing
                    your "Travel Distance" can be done in your dashboard in the "Service Details" section.
                </li>
                <li>Upload higher quality photos, videos, audio samples, and content. Entertainers and Vendors that look
                    professional get more leads.
                </li>
                <li>Link to your Profile page from other websites, especially your Social Media accounts like Facebook,
                    Twitter, Instagram, and Google+. Good, high-quality links pointing to your Profile page increases
                    the likelihood that your Profile page will be found in the search engines. However, do not attempt
                    to artificially increase your Profile page's search engine position by creating spammy links. Too
                    many low-quality and spammy links can hurt the ranking of your Profile page.
                </li>
            </ol>
            <h5>I can see my quote requests in my GigHighway account, but I'm not getting the emails. Why?</h5>
            <p>Check to make sure they're not being directed into your SPAM folder. If they are, mark them as Not Spam.
                Also, be sure to enter the GigHighway email address in your email address book. If this doesn't solve
                the problem, contact your internet Service Provider (ISP) and ask them to whitelist all emails coming
                from GigHighway.com.</p>
            <h5>Will I be auto-added to Clients' quote requests?</h5>
            <p>You may receive quote requests from Clients who have asked GigHighway to add similar Vendors to their
                quote request. This gives you more opportunities to land new gigs.</p>
            <h5>What happens if I am not in a place where I have access to emails?</h5>
            <p>Find a computer with an internet connection and login to your GigHighway account, or login to your email
                account on your cell phone. All quote requests are sent via email.</p>
            <h5>What should I do if I get repeated requests from the same Client for the same event?</h5>
            <p>Sometimes, a Client will request quotes from numerous Entertainers or Vendors, and forget who they have
                already requested a quote from. The result can be multiple requests for the same event. Also, a Client
                may request a quote, not hear from the Entertainer or Vendor after a short period of time, assume the
                quote request was not received, and then send a new quote request. Just be nice and reply back saying
                something like "Thanks for your interest. I have already sent you a quote for this event."</p>
        </div>
        <a href="#" class="backToTop">Back to Top</a>

        <span class="anchor" id="Payments"></span><h4>Payments</h4>
        <div class="sectionContent">
            <h5>How does a Client pay me for services?</h5>
            <p>Once a Member has reached an agreement with a Client to provide services for that Client's event, and a
                price has been agreed upon between the two parties, payment method will be decided depending on what
                form of payment that Member can receive. Some Members take credit card payments, some only personal or
                business checks, while others may offer other payment options. GigHighway recommends that Members use
                written contracts to specify all payment terms, and collect a non-refundable deposit from Clients.</p>
        </div>
        <a href="#" class="backToTop">Back to Top</a>

        <span class="anchor" id="Cancelling_an_Event"></span><h4>Cancelling an Event</h4>
        <div class="sectionContent">
            <h5>What happens if I have to cancel an event?</h5>
            <p>It is important for Members to know that cancelling an event should be avoided if at all possible. When a
                Member cancels an event, all payment received from the Client will be returned to that Client in
                full.</p>
            <p>As stated in GigHighway's <a href="/termsofuse/">Terms of Use</a>, GigHighway has the explicit right to
                temporarily suspend or permanently de-activate the Membership of any GigHighway Member who has been a
                "no-show" for more than one GigHighway booking and/or fails to return the Client's deposit or balance
                payment for any "no-show" if GigHighway, at its sole discretion, determines the "no-show" claim was
                valid. GigHighway, at its sole discretion, has the explicit right to temporarily suspend or permanently
                de-activate the Membership of any GigHighway Member who cancels (for any reason) a booking on a
                GigHighway Client and subsequently fails to return the Client's deposit or balance payment.</p>
            <p>A GigHighway Vendor may not cancel on a GigHighway Client because the Vendor is afraid of receiving a
                negative Client review after the event has taken place.</p>
            <h5>What happens if I don't show up for an event?</h5>
            <p>As stated in GigHighway's <a href="/termsofuse/">Terms of Use</a>, GigHighway has the explicit right to
                temporarily suspend or permanently de-activate the Membership of any GigHighway Member who has been a
                "no-show" for more than one GigHighway booking and/or fails to return the Client's deposit or balance
                payment for any "no-show" if GigHighway, at its sole discretion, determines the "no-show" claim was
                valid. GigHighway, at its sole discretion, has the explicit right to temporarily suspend or permanently
                de-activate the Membership of any GigHighway Member who cancels (for any reason) a booking on a
                GigHighway Client and subsequently fails to return the Client's deposit or balance payment.</p>
            <h5>What happens if a Client cancels on me?</h5>
            <p>GigHighway recommends having a Client sign a contract for your services that includes a non-refundable
                deposit. Members may also want to consider including in the contract, payment details that require the
                balance of payment due a specified number of days (ie. 3 days) before the event date. Additionally,
                Members may want to consider adding a clause in the contract that states if the Client cancels the event
                less than a specified number of days (ie. 14 days, 30 days) before the event, the balance must still be
                paid by the Client.</p>
        </div>
        <a href="#" class="backToTop">Back to Top</a>

        <span class="anchor" id="Reviews_from_Clients"></span><h4>Reviews from Clients</h4>
        <div class="sectionContent">
            <h5>My Client doesn't know how to leave a review. What should I say to them?</h5>
            <p>Tell your Client they should:</p>
            <ol>
                <li>Go to your Profile page.</li>
                <li>Click "Write a Review".</li>
                <li>Fill in the form and click "Submit".</li>
            </ol>
            <h5>Can I post a response to a Client review?</h5>
            <p>Yes. Here are the steps:</p>
            <ol>
                <li>Login to your account and go to your Dashboard.</li>
                <li>Click "View All Reviews" in the blue "Reviews" square.</li>
                <li>Click "View" to view a Review.</li>
                <li>Click "Reply to Review."</li>
                <li>Leave a reply for this review and click "Send." Note: Your reply will show on your Profile page
                    beneath the original Review.
                </li>
            </ol>
            <h5>What can I do if I receive a bad Client review?</h5>
            <p>You can leave a response to that review so future Clients can hear your side of the story. You can also
                get additional reviews that are positive. Getting many positive reviews can mute the effect of one
                negative review. If you feel the bad review was unjustified, contact GigHighway and give us your side of
                the story. Here are the steps for removing a bad review:</p>
            <ol>
                <li>Login to your account and go to your Dashboard.</li>
                <li>Click "View All Reviews" in the blue "Reviews" square.</li>
                <li>Click "View" to view a Review.</li>
                <li>Click "Dispute Review."</li>
                <li>Tell us why you think this review should be removed and click "Submit." If GigHighway determines the
                    review should be removed, we will remove it.
                </li>
            </ol>
            <h5>Can I have a review removed from my Profile page?</h5>
            <p>In some cases, yes. Here are the steps:</p>
            <ol>
                <li>Login to your account and go to your Dashboard.</li>
                <li>Click "View All Reviews" in the blue "Reviews" square.</li>
                <li>Click "View" to view a Review.</li>
                <li>Click "Dispute Review."</li>
                <li>Tell us why you think this review should be removed and click "Submit." GigHighway will evaluate
                    your request and make a final decision on whether removing the review in question is warranted. If
                    GigHighway determines the review should be removed, we will remove it.
                </li>
            </ol>
            <h5>Why would GigHighway remove a Client review?</h5>
            <p>There are several reasons why GigHighway will remove a Client review.</p>
            <ol>
                <li>GigHighway will remove a review if GigHighway determines, at its sole discretion, that a Member
                    submitted a review for a Profile with which that Member was affiliated. Illegitimate reviews are not
                    permitted.
                </li>
                <li>When a Member disputes a review, if GigHighway determines, at its sole discretion, that the review
                    in question is invalid or inaccurate, GigHighway will remove that Client review.
                </li>
                <li>Any bad reviews left by a Member, in an effort to discredit other Members, will be removed. This
                    will result in an immediate termination of that Member's account without refund and a possible
                    permanent ban from the Site.
                </li>
                <li>Any review that is slanderous, libelous, uses foul language, or uses threatening language will be
                    removed.
                </li>
                <li>GigHighway has the right to remove or edit Client reviews at its sole discretion.</li>
            </ol>
        </div>
        <a href="#" class="backToTop">Back to Top</a>

        <span class="anchor" id="Booking_Gigs"></span><h4>Booking Gigs</h4>
        <div class="sectionContent">
            <h5>Does GigHighway provide contracts for Members and Clients?</h5>
            <p>GigHighway does not provide contracts. However, GigHighway recommends that Members use contracts to
                protect their interests. If you are unsure as to what to include in a contract, you can find sample
                entertainment contracts online by searching for "contracts for entertainment services" or other similar
                phrases.</p>
            <h5>Should I use a contract?</h5>
            <p>GigHighway recommends that Members always use contracts.</p>
        </div>
        <a href="#" class="backToTop">Back to Top</a>

        <h3>Creating a Profile</h3>

        <span class="anchor" id="Background_Checks"></span><h4>Background Checks</h4>
        <div class="sectionContent">
            <h5>Does GigHighway offer background checks?</h5>
            <p>Not currently.</p>
            <h5>Does GigHighway require Members to have background checks?</h5>
            <p>No. Background checks are optional.</p>
        </div>
        <a href="#" class="backToTop">Back to Top</a>

        <span class="anchor" id="Search_Results"></span><h4>Search Results</h4>
        <div class="sectionContent">
            <h5>How do search results get generated?</h5>
            <p>When users search the GigHighway website, they enter the Entertainment or Service Provider category along
                with an event location. GigHighway displays a list of Entertainers or Vendors in an order that is
                calculated based on several factors including location, Member rating, featured status, and others.
                GigHighway uses algorithms that return a "best match" list for each specific search.</p>
        </div>
        <a href="#" class="backToTop">Back to Top</a>

        <span class="anchor" id="Member_Vendor_Ratings"></span><h4>Member/Vendor Ratings</h4>
        <div class="sectionContent">
            <h5>Does my star rating affect where I rank in the search results?</h5>
            <p>Star ratings do factor into the overall ranking of a Profile page in the GigHighway search results.
                However, there are many factors that determine GigHighway's placement of Profile pages in a search
                result. Depending on location and other factors, star ratings may or may not affect where a Member ranks
                in a search result.</p>
            <h5>If my Membership expires and I then sign up again at a later date, will I still be able to retain my
                previous star ratings?</h5>
            <p>Yes. If you sign up for a Member account, then let the account go inactive for a period of time, you can
                login to your account at a later date, pay to renew your Membership, and your Profile will become active
                again.</p>
        </div>
        <a href="#" class="backToTop">Back to Top</a>

        <span class="anchor" id="Videos"></span><h4>Videos</h4>
        <div class="sectionContent">
            <h5>Can my videos contain my contact information?</h5>
            <p>Yes. Other premier booking services don't allow this, but GigHighway wants to make the process of finding
                and booking Entertainment and Service Providers as easy and inexpensive as possible. For this reason,
                GigHighway allows Clients to contact and book our Entertainers and Vendors directly, using contact
                information found on our Entertainers and Vendors Profile pages, videos, and audios, without GigHighway
                taking a commission. This has the effect of lowering the overall cost for both Clients and Members since
                GigHighway does not require a fee or commission for gigs booked.</p>
            <h5>How do I add a video to my Profile page?</h5>
            <p>GigHighway allows Members to add YouTube videos and Vimeo videos. To add a video, simply login to your
                dashboard, go to the "Media Files" section, and enter the URLs for your YouTube or Vimeo videos.</p>
            <h5>How long can my video be?</h5>
            <p>As long as you can upload your video to YouTube or Vimeo, it can be displayed on your Profile page.</p>
        </div>
        <a href="#" class="backToTop">Back to Top</a>

        <span class="anchor" id="Images"></span><h4>Images</h4>
        <div class="sectionContent">
            <h5> What restrictions does GigHighway place on uploaded images and photos?</h5>
            <p>Images and photos that GigHighway deems offensive are not permitted and will be removed. Images that
                contain nudity, obscenity, or sexually offensive material, are subject to being removed. GigHighway
                reserves the right to reject, remove, or crop any image or photo, at our sole discretion.</p>
            <h5>How large can my images and photos be?</h5>
            <ol>
                <li>All uploaded images and photos must be less than 6MB in size.</li>
                <li>The Profile Photo Tile (the image that displays in search results) is 300px by 300px. You can upload
                    a larger image than 300px by 300px, but the image will be automatically cropped to be 300px by
                    300px, with parts of the uploaded image being discarded. For best results, upload an image that is
                    exactly 300px by 300px.
                </li>
                <li>Images uploaded to the Photo Gallery are displayed as 640px by 360px. You can upload larger images
                    than 640px by 360px, but the images will be resized automatically and the aspect ratio may change,
                    causing the image to appear stretched. For best results, upload images that are exactly 640px by
                    360px. Larger images should maintain the same aspect ratio as 640px by 360px. For example, images
                    that are 800px by 450px, or 1280px by 720px will maintain the same aspect ratio after the images are
                    automatically resized to be 640px by 360px.
                </li>
            </ol>
            <h5>What image formats does GigHighway allow?</h5>
            <p>Any of the following: JPEG, JPG, GIF, BMP, TIFF, PNG.</p>
            <h5>Can I upload images and photos that include my contact information?</h5>
            <p>Yes. Other premier booking services don't allow this, but GigHighway wants to make the process of finding
                and booking entertainment and Service Providers as easy and inexpensive as possible. For this reason,
                GigHighway allows Clients to contact and book our Entertainers and Vendors directly, using contact
                information found on our Entertainers and Vendors Profile pages, videos, and audios, without GigHighway
                taking a commission. This has the effect of lowering the overall cost for both Clients and Members since
                GigHighway does not require a fee or commission for gigs booked.</p>
            <h5>How do I add an image or photo to my Profile page?</h5>
            <p>To add an image or photo, simply login to your dashboard, choose the "Media Files" section, and follow
                the instructions to upload images or photos to your Profile page.</p>
            <h5>How can I use an image or photo from my other website?</h5>
            <ol>
                <li>Go to the web page where your image or photo is located.</li>
                <li>Right-click on the image or photo you want to use on GigHighway.</li>
                <li>Click "Save Image As," name it, and save it to your computer.</li>
                <li>Login to your dashboard and upload this image or photo to your Profile page.</li>
            </ol>
            <h5>I added or changed my images or photos, but I don't see the changes on my Profile page. What's the
                matter?</h5>
            <p>Most of the time, getting your images and photos to appear on your Profile page is as simple as
                "refreshing" your page. While viewing your Profile page in your web browser, try clicking the "refresh"
                button on your web browser. If this doesn't have the desired effect, turn your computer off and then
                restart it. If you added the photos correctly in your dashboard, they will appear on your Profile
                page.</p>
        </div>
        <a href="#" class="backToTop">Back to Top</a>

        <span class="anchor" id="Audio"></span><h4>Audio</h4>
        <div class="sectionContent">
            <h5>Am I allowed to upload audio that includes my contact information?</h5>
            <p>Yes. Other premier booking services don't allow this, but GigHighway wants to make the process of finding
                and booking entertainment and Service Providers as easy and inexpensive as possible. For this reason,
                GigHighway allows Clients to contact and book our Entertainers and Vendors directly, using contact
                information found on our Entertainers and Vendors Profile pages, videos, and audios, without GigHighway
                taking a commission. This has the effect of lowering the overall cost for both Clients and Members since
                GigHighway does not require a fee or commission for gigs booked.</p>
            <h5>What audio formats can I upload?</h5>
            <p>GigHighway allows audio files in the MP3 format to be uploaded. If your audio is in a different format,
                it must first be converted to the MP3 format before uploading. Most computers come with software that
                allows users to convert other audio file types to MP3. Conversion software can also be found on the
                internet. If you want to convert a CD to MP3, you can download software from iTunes by visiting <a
                        href="http://www.apple.com/itunes/download/" target="_blank">http://www.apple.com/itunes/download/</a>.
            </p>
        </div>
        <a href="#" class="backToTop">Back to Top</a>

        <span class="anchor" id="Profile_Content"></span><h4>Profile Content</h4>
        <div class="sectionContent">
            <h5>Can I edit the URL of my Profile page?</h5>
            <p>No.</p>
            <h5>Can I change my category selections?</h5>
            <p>Yes. Login to your dashboard, select the Profile you want to edit (if you have more than one Profile),
                click "EDIT" or "EDIT PROFILE," and add or delete categories in the "General Information" section.</p>
            <h5>How long can the description be on my Profile page?</h5>
            <p>Up to 5000 characters.</p>
            <h5>Can I add contact information and links to my Profile page?</h5>
            <p>Yes. Other premier booking services don't allow this, but GigHighway wants to make the process of finding
                and booking entertainment and Service Providers as easy and inexpensive as possible. For this reason,
                GigHighway allows Clients to contact and book our Entertainers and Vendors directly, using contact
                information found on our Entertainers and Vendors Profile pages, videos, and audios, without GigHighway
                taking a commission. This has the effect of lowering the overall cost for both Clients and Members since
                GigHighway does not require a fee or commission for gigs booked.</p>
            <p>Allowed contact information on Profile pages, videos, audio samples, images and photos:</p>
            <ol>
                <li>A URL to your website (example: http://www.website.com)</li>
                <li>Phone number</li>
                <li>Email address</li>
            </ol>
        </div>
        <a href="#" class="backToTop">Back to Top</a>

        <h3>Memberships</h3>

        <span class="anchor" id="Contacting_GigHighway"></span><h4>Contacting GigHighway</h4>
        <div class="sectionContent">
            <h5>How can I contact GigHighway?</h5>
            <p>Fill out our contact form here: <a href="/contactus/">Contact Us</a></p>
            <p>
                Email us at
                <a href="mailto:info@gighighway.com">info@gighighway.com</a>
            </p>
            <h5>How long before I get a response after contacting GigHighway?</h5>
            <p>We do our best to respond within 2 hours during normal business hours. However, please allow up to 48
                hours for a response. Normal business hours are 8AM-5PM Monday through Friday.</p>
        </div>
        <a href="#" class="backToTop">Back to Top</a>

        <span class="anchor" id="Logging_In"></span><h4>Logging In</h4>
        <div class="sectionContent">
            <h5>Where is the login page located?</h5>
            <p>Go to <a href="/">https://www.gighighway.com</a> and click the "SIGN IN" button at the top of the page.
                Once there, enter your login username and password to login. If you have forgotten your username or
                password, click "Forgot your password?" and follow the instructions provided.</p>
            <h5>What do I do if I forget my username or password?</h5>
            <p>If you have forgotten your username or password, click "Forgot your password?" and follow the
                instructions provided.</p>
        </div>
        <a href="#" class="backToTop">Back to Top</a>

        <span class="anchor" id="Dashboard"></span><h4>Dashboard</h4>
        <div class="sectionContent">
            <h5>How can I login to my GigHighway Dashboard?</h5>
            <p>Go to <a href="/signin/">https://www.gighighway.com/signin/</a> and enter your username and password to
                login. If you have forgotten your username or password, click "Forgot your password?" and follow the
                instructions provided.</p>
            <h5>What is the Dashboard?</h5>
            <p>The Dashboard contains a Member's account information. It's also where a Member can create or edit their
                Profile page, upload videos, upload images and photos, upload audio files, add content, etc. Profile
                pages that are well-written, contain a sufficient amount of text, and include images and videos, have a
                better chance of getting more leads and more gigs, so take your time and create a Profile page that
                looks professional.</p>
            <h5>Where can I update my billing information?</h5>
            <p>Click on the "PAYMENT INFORMATION" link in your Dashboard to update billing information.</p>
        </div>
        <a href="#" class="backToTop">Back to Top</a>

        <span class="anchor" id="Featured_Profiles"></span><h4>Featured Profiles</h4>
        <div class="sectionContent">
            <h5>What is a Featured Profile?</h5>
            <p>Purchasing a Featured Profile is perhaps the best way to increase a Member's leads and gigs. When all
                other factors are the same, Featured Profiles display above non-Featured Profiles in GigHighway's search
                results, thus giving more exposure to a Member's Profile. The result can be more views, more leads, more
                gigs, and more income.</p>
            <p>When multiple Featured Profiles appear in the same search result for the same location, assuming all
                other factors are the same, the order of Featured Profiles are randomly chosen to ensure that all
                Featured Profiles receive equal exposure over time.</p>
            <p>When a search is performed for a specific location, Featured Profiles in that location display above
                non-Featured Profiles in that location. However, Featured Profiles from a location further from the
                search location will not appear above Featured or non-Featured Profiles from that search location. As an
                example, if a user searches for a dance band for an event in Los Angeles, Featured "dance band" Profiles
                from Los Angeles will appear in the search result above non-Featured Profiles, while Featured Profiles
                from San Diego will appear below Featured and non-Featured Profiles from Los Angeles. On the other hand,
                Featured Profiles from San Diego will appear above Featured and non-Featured Profiles from Los Angeles
                when a user searches for a dance band in San Diego. GigHighway displays "best match" results in its
                searches so Clients can easily find what they're looking for.</p>
            <h5>When my membership comes due, will it automatically renew my Featured Profile status too?</h5>
            <p>Yes. By default, "automatic renewal" is turned "On" with each new Member signup. If you do not want to
                have your account automatically renewed, simply go to your Dashboard, and in the "Choose a Plan"
                section, turn "Automatic Renewal" to "Off."</p>
            <h5>How will my Featured Profile look on a results page?</h5>
            <p>GigHighway places "Featured" banners on Featured Profile search results. This helps Featured Profiles
                stand out from non-Featured Profiles. The result can be more views and more leads. However, GigHighway
                reserves the right to change the appearance of Featured Profile search results, as well as Featured
                Profiles, in an effort to improve results for Members.</p>
        </div>
        <a href="#" class="backToTop">Back to Top</a>

        <span class="anchor" id="Social_Media"></span><h4>Social Media</h4>
        <div class="sectionContent">
            <h5>Where can I follow GigHighway on Social Media?</h5>
            <ul>
                <li>Facebook: <a href="https://www.facebook.com/GigHighway" target="_blank">https://www.facebook.com/GigHighway</a>
                </li>
                <li>Twitter: <a href="https://twitter.com/gighighway" target="_blank">https://twitter.com/gighighway</a>
                </li>
                <li>Instagram: <a href="https://www.instagram.com/gighighway/" target="_blank">https://www.instagram.com/gighighway/</a>
                </li>
                <li>Google+: <a href="https://plus.google.com/+Gighighway1" target="_blank">https://plus.google.com/+Gighighway1</a>
                </li>
                <li>YouTube: <a href="https://www.youtube.com/channel/UCjkwyekOcYrVZd5hUpV9N_A" target="_blank">https://www.youtube.com/channel/UCjkwyekOcYrVZd5hUpV9N_A</a>
                </li>
            </ul>
        </div>
        <a href="#" class="backToTop">Back to Top</a>

        <span class="anchor" id="Memberships"></span><h4>Memberships</h4>
        <div class="sectionContent">
            <h5>I have signed up on GigHighway. Now what?</h5>
            <p>Login to your GigHighway Dashboard and create a Profile page by adding text, videos, audio files, images,
                and more. The sooner you add your content and create your Profile page, the sooner you will start
                showing up in searches for the service you offer.</p>
            <h5>Can I deactivate my account/Profile page at any time?</h5>
            <p>Yes. However, while your account is deactivated it will not appear in search results. This will cause you
                to lose days while your account is not active. Here are the steps to deactivate your account/Profile
                page:</p>
            <ol>
                <li>Login to your account</li>
                <li>Go to the Dashboard for the Profile you want to deactivate.</li>
                <li>Click to "Edit" the Profile.</li>
                <li>Change "Profile status" to "Inactive." Your Profile page will no longer show up in search results
                    until you change the "Profile status" back to "Active."
                </li>
            </ol>
            <h5>How can I activate or reactivate my account/Profile page?</h5>
            <p>If your account/Profile page is currently "Inactive," and you would like to make it "Active" so your
                Profile page will show up in the search results, follow these steps:</p>
            <ol>
                <li>Login to your account</li>
                <li>Go to the Dashboard for the Profile you want to activate.</li>
                <li>Click to "Edit" the Profile.</li>
                <li>Change "Profile status" to "Active." Your Profile page will now show up in search results.</li>
            </ol>
            <h5>My Profile page does not show up in search results. What can I do?</h5>
            <ol>
                <li>Login to your account, go to the Dashboard for the Profile in question, click "Edit," and make sure
                    the "Profile status" is set to "Active" in the General Information section.
                </li>
                <li>Make sure your account has not expired. If so, simply renew your account.</li>
                <li>Make sure your Profile is listed in the correct "Main Category" or "Additional Categories." For
                    example, if "Dance Bands" is your main category, and "Cover Bands" is your only additional category,
                    if you are searching in a different category, "Party Bands," for example, your Profile will not show
                    up in the search results. Be sure to list your Profile under all of the Additional Categories you
                    belong in to increase your chances of appearing in search results.
                </li>
                <li>If solutions 1-3 do not solve your problem, contact GigHighway here: <a href="/contactus/">Contact
                        Us</a></li>
            </ol>
            <h5>Can I upgrade to a Featured Profile?</h5>
            <p>Yes. You can upgrade to a Featured Profile in your Dashboard. In some cases the upgrade (or downgrade) of
                an account will not take effect until the current account subscription expires.</p>
            <h5>Does GigHighway offer a money back guarantee?</h5>
            <p>Yes, we offer a 30-day, 100% money back guarantee. If you're not happy with your Membership, request a
                refund here: <a href="/contactus/">Contact Us</a></p>
            <h5>Does GigHighway guarantee I will get gigs?</h5>
            <p>No. Your success depends on factors that are out of GigHighway's control, including the kind of service
                you offer, the size of demand in your location, whether you have purchased a Featured Profile or not,
                how much competition you have in your location, how much you charge for your services, how well you
                create your Profile page, as well as other factors. GigHighway is very confident that you'll experience
                success through our website, but we cannot guarantee it.</p>
            <h5>Can I cancel my account?</h5>
            <p>Yes. You can cancel your account at any time. If you cancel within 30 days of signing up you may be
                entitled to a full refund. Cancellations after 30 days are not entitled to a refund. If you wish to
                cancel within 30 days of signing up, please contact us and let us know by sending an email to
                support@gighighway.com. The easiest way to cancel after 30 days is to login to your Dashboard, select
                the Profile you wish to cancel, click "Edit," and under the "Choose a Plan" section change the
                "Automatic Renewal" to Off. This ensures your credit card will not be charged when your account comes up
                for renewal. Additionally, to stop your Profile from showing up in the search results, in the "General
                Information" section change the "Profile status" to "Inactive."</p>
            <h5>How can I sign up for another Membership?</h5>
            <p>Login to your Dashboard and click "ADD A NEW PROFILE"</p>
            <h5>Can I change my status to manual renew?</h5>
            <p>Yes. Login to your Dashboard, select the Profile you wish to edit, click "Edit," and under the "Choose a
                Plan" section change the "Automatic Renewal" to Off.</p>
            <h5>How do I pay for my GigHighway Membership?</h5>
            <p>Payments are made by credit card or debit card.</p>
            <h5>Can I upgrade my Membership?</h5>
            <p>Members can upgrade to a Featured Profile, but other than that, all Memberships are identical except for
                length of subscription. Other premier booking services charge you more for extra benefits, but
                GigHighway wants to make getting gigs as easy and affordable as possible, and therefore provides every
                benefit for every Member at a lower price.</p>
            <h5>Can I buy more than 1 Membership?</h5>
            <p>Yes. Agents who represent multiple entertainment products Vendors with multiple businesses can "ADD A NEW
                PROFILE" for each entertainment product, Vendor, or business. After signing up for the first Membership,
                login to your Dashboard and click the button to "ADD A NEW PROFILE."</p>
            <h5>What comes with a GigHighway Membership?</h5>
            <p>When you sign up for a Membership at GigHighway you will be able to create a Profile page that includes
                videos, audio samples, photos, a description of your service, and many other features. Clients who
                search our website will be able to find your Profile page, contact you, and hire you for their event.
                Creating a professional-looking Profile page that includes quality images and videos, well-written text,
                and other attention-getting selling features is the key to success. Note: A "Featured" listing has the
                added benefit of allowing a Profile page to display above their competitors in search results.</p>
            <p>A GigHighway Membership gives you increased exposure for your service. With a good online presence you
                can expect to get more Profile views, more Client leads, and more gigs.</p>
            <p>GigHighway offers more benefits for less money than other premier booking services. Plus, Members do not
                pay commissions or hidden fees to GigHighway, as with other booking services, so more money goes into
                your pocket with each gig you book.</p>
            <h5>Should I "Automatic Renewal?"</h5>
            <p>Every new Member's account is set to "Automatic Renewal" by default. This gives Members peace of mind in
                knowing that they won't be missing new leads or new gigs if they forget to renew their Membership. With
                "Automatic Renewal," GigHighway will automatically charge your credit or debit card whenever your
                Membership comes up for renewal. If you would rather renew your Membership manually, just login to your
                Dashboard, and in the "Choose a Plan" section, change "Automatic Renewal" to "Off."</p>
        </div>
        <a href="#" class="backToTop">Back to Top</a>
    </div>

@endsection