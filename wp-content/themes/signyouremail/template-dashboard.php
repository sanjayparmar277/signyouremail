<?php
/**
 * Template Name: Dashboard
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package signyouremail
 */
?>
<?php  echo get_header(); ?>

<section class="content-wrapper section">
   <div class="container">
       <div class="columns">
           <div class="column">
               <h1 class="title is-3 is-uppercase">
       Dashboard
       <span class="tag is-info has-text-weight-semibold is-capitalized">
           (1/1 used)
       </span>
       </h1>
           </div>
           <div class="column is-narrow">

           </div>
       </div>
       <br>
       <div class="columns">
           <div class="column">
               <h2 class="title is-3">
       Generators
       <span class="tag is-light has-text-weight-semibold">
           0 Signatures in 0 Generators
       </span>
       </h2>
           </div>
           <div class="column is-narrow">
               <a href="javacript:void(0)" class="button is-info">
                   <span class="icon"><i class="icon-plus"></i></span>
                   <span>Create New Generator</span>
               </a>
           </div>
       </div>
       <div class="message is-light">
           <div class="message-body">
               <b>You have not created any Generators.</b>
               <br> A Generator is a predifined template page that you can share with your team members, where they can fill in their details and create their own signatures.
           </div>
       </div>
       <br>
       <div class="columns">
           <div class="column">
               <h2 class="title is-3">
       Signatures
       <span class="tag is-light has-text-weight-semibold">
           1 Signature
       </span>
       </h2>
           </div>
           <div class="column is-narrow">
               <a href="javacript:void(0)" class="button is-info">
                   <span class="icon"><i class="icon-plus"></i></span>
                   <span>Create New Signature</span>
               </a>
           </div>
       </div>
       <table class="table is-fullwidth is-striped is-bordered">
           <thead>
               <tr>
                   <th class="is-hidden-mobile has-text-centered">#</th>
                   <th class="has-text-centered">Signature Name</th>
                   <th class="is-hidden-mobile has-text-centered">Email</th>
                   <th class="has-text-centered">Actions</th>
               </tr>
           </thead>
           <tbody>
               <tr ref="signature-18871">
                   <th class="is-hidden-mobile has-text-centered">1</th>
                   <td class="has-text-centered">
                       <a href="javacript:void(0)" @click.prevent="$store.commit('showInstallSignature', 18871);" target="_blank"><span v-pre>Ravi Dabhi</span></a>
                   </td>
                   <td class="is-hidden-mobile has-text-centered">
                       <span v-pre>ravi@agile.com</span>
                   </td>
                   <td class="has-text-centered">
                       <a @click.prevent="$store.commit('showInstallSignature', 18871);" v-tooltip="'Install Signature'" class="download-signatur-popup">
                           <span class="icon"><i class="icon-download"></i></span>
                       </a>
                       <a href="javacript:void(0)" v-tooltip="'Edit Signature'" class="edit-signature-popup">
                           <span class="icon"><i class="icon-pencil"></i></span>
                       </a>
                       <a @click.prevent="$store.commit('toggleUpgradeModal')" v-tooltip="'Duplicate Signature, Pro Only'" class="duplicate-signature-popup">
                           <span class="icon"><i class="icon-copy"></i></span>
                       </a>
                       <a @click.prevent="emailSignature(18871, 'ravi@agile.com')" v-tooltip="'Email To User'" class="emailto-user-popup">
                           <span class="icon"><i class="icon-envelope-o"></i></span>
                       </a>
                       <a @click.prevent="$store.commit('showShareSignature', 'https://www.signmyemails.com/signatures/18871/install/c32b9047b184d367677fa5121c56eabf');" v-tooltip="'Share Signature Install Url'"  class="share-url-popup">
                           <span class="icon"><i class="icon-share-alt"></i></span>
                       </a>
                       <a @click.prevent="removeSignature(18871)" v-tooltip="'Remove Signature'" class="remove-signature-popup">
                           <span class="icon"><i class="icon-trash-o"></i></span>
                       </a>
                   </td>
               </tr>
           </tbody>
       </table>
       <div class="message is-danger">
           <div class="message-body">
               Signature limit reached: <a href="#" class="has-text-info" @click.prevent="$store.commit('toggleUpgradeModal')">Upgrade your account</a> to create more signatures!
           </div>
       </div>
   </div>
   <!-- download popup -->
   <div class="modal is-active is-large download-model" style="display: none;">
       <div class="modal-card download-model" style="display: none;">
           <header class="modal-card-head">
               <p class="modal-card-title">Install Signature</p>
               <button class="delete delete-download-model"></button>
           </header>
           <section class="modal-card-body">
               <!---->
               <!---->
               <div class="how-to-install">
                   <div>
                       <p><strong>Please select your email client to install your signature:</strong></p>
                       <div class="columns is-multiline is-gapless is-mobile">
                           <div class="column is-2-desktop is-3-tablet is-half-mobile">
                               <div class="email-client-block">
                                   <div class="email-client-image-block"><img src="https://cdn.signmyemails.com/images/email_clients/outlook.png" alt="Outlook"></div> <span>Outlook</span></div>
                           </div>
                           <div class="column is-2-desktop is-3-tablet is-half-mobile">
                               <div class="email-client-block">
                                   <div class="email-client-image-block"><img src="https://cdn.signmyemails.com/images/email_clients/apple-mail.png" alt="Apple Mail"></div> <span>Apple Mail</span></div>
                           </div>
                           <div class="column is-2-desktop is-3-tablet is-half-mobile">
                               <div class="email-client-block">
                                   <div class="email-client-image-block"><img src="https://cdn.signmyemails.com/images/email_clients/gmail.png" alt="Gmail"></div> <span>Gmail</span></div>
                           </div>
                           <div class="column is-2-desktop is-3-tablet is-half-mobile">
                               <div class="email-client-block">
                                   <div class="email-client-image-block"><img src="https://cdn.signmyemails.com/images/email_clients/mail-app-iphone.png" alt="Mail App iPhone"></div> <span>Mail App iPhone</span></div>
                           </div>
                           <div class="column is-2-desktop is-3-tablet is-half-mobile">
                               <div class="email-client-block">
                                   <div class="email-client-image-block"><img src="https://cdn.signmyemails.com/images/email_clients/thunderbird.png" alt="Thunderbird"></div> <span>Thunderbird</span></div>
                           </div>
                           <div class="column is-2-desktop is-3-tablet is-half-mobile">
                               <div class="email-client-block">
                                   <div class="email-client-image-block"><img src="https://cdn.signmyemails.com/images/email_clients/yahoo-mail.png" alt="Yahoo Mail"></div> <span>Yahoo Mail</span></div>
                           </div>
                           <div class="column is-2-desktop is-3-tablet is-half-mobile">
                               <div class="email-client-block">
                                   <div class="email-client-image-block"><img src="https://cdn.signmyemails.com/images/email_clients/godaddy.png" alt="Godaddy"></div> <span>Godaddy</span></div>
                           </div>
                           <div class="column is-2-desktop is-3-tablet is-half-mobile">
                               <div class="email-client-block">
                                   <div class="email-client-image-block"><img src="https://cdn.signmyemails.com/images/email_clients/inbox-by-gmail.png" alt="Inbox by Gmail"></div> <span>Inbox by Gmail</span></div>
                           </div>
                           <div class="column is-2-desktop is-3-tablet is-half-mobile">
                               <div class="email-client-block">
                                   <div class="email-client-image-block"><img src="https://cdn.signmyemails.com/images/email_clients/airmail.png" alt="Airmail"></div> <span>Airmail</span></div>
                           </div>
                           <div class="column is-2-desktop is-3-tablet is-half-mobile">
                               <div class="email-client-block">
                                   <div class="email-client-image-block"><img src="https://cdn.signmyemails.com/images/email_clients/spark.png" alt="Spark"></div> <span>Spark</span></div>
                           </div>
                           <div class="column is-2-desktop is-3-tablet is-half-mobile">
                               <div class="email-client-block">
                                   <div class="email-client-image-block"><img src="https://cdn.signmyemails.com/images/email_clients/other.png" alt="Other"></div> <span>Other</span></div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="message is-warning">
                   <div class="message-body">
                       <p><span><strong>Note:</strong> Free users must keep the "Email Signature by SignMyEmails" branding.</span> &nbsp;
                           <a class="button is-small is-warning"><span class="icon"><i class="icon-close"></i></span> <span>Remove Branding</span></a></p>
                   </div>
               </div>
           </section>
           <footer class="modal-card-foot">
               <div class="columns is-gapless is-fullwidth is-mobile">
                   <div class="column"><a href="/signatures/null/edit" class="button"><span class="icon"><i class="icon-pencil"></i></span> <span>Edit</span></a> <a class="button"><span class="icon"><i class="icon-copy"></i></span> <span>Duplicate</span></a></div>
                   <div class="column is-narrow"><span class="button is-success"><span class="icon"><i class="icon-check"></i></span> <span>Done</span></span>
                   </div>
               </div>
           </footer>
       </div>
   </div>
   <!-- share url model -->
   <div class="modal is-active share-url-model" style="display: none;">
       <div class="modal-card share-url-model" style="display: none;">
           <header class="modal-card-head">
               <p class="modal-card-title">Share Signature Url</p>
               <button class="delete delete-shareurl-model"></button>
           </header>
           <section class="modal-card-body">
               <div>
                   <p>Share signature url with the user. This url does not require a logged in user.</p>
               </div>
               <br>
               <div class="field is-marginless">
                   <div class="field-body">
                       <div class="field has-addons">
                           <p class="control is-expanded">
                               <input id="share-url" type="text" class="input">
                           </p>
                           <div class="control"><span id="copy-share-url" data-clipboard-target="#share-url" class="button is-info"><span class="icon"><i class="icon-copy"></i></span> <span class="copy-text">Copy</span></span>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <footer class="modal-card-foot">
               <div class="columns is-gapless is-fullwidth is-mobile">
                   <div class="column"></div>
                   <div class="column is-narrow"><span class="button delete-shareurl-model"><span>Close</span></span>
                   </div>
               </div>
           </footer>
       </div>
   </div>
   <!-- duplicate signature model -->
   <div class="modal is-active duplicate-signature-model" style="display: none;">
       <div class="modal-card duplicate-signature-model" style="display: none;">
           <header class="modal-card-head">
               <p class="modal-card-title">
                   Upgrade To A Pro Account
               </p>
               <button class="delete delete-duplicate-signature"></button>
           </header>
           <section class="modal-card-body">
               <!---->
               <div class="plans-length has-text-centered"><span class="">Monthly</span>
                   <input type="checkbox" id="switch" checked="checked" class="switch-box">
                   <label for="switch" class="switch">Toggle</label> <span class="active">
                   Yearly <span class="annual-save-text has-text-primary">(Save 40%)</span></span>
               </div>
               <div class="columns is-desktop has-text-centered plans">
                   <div class="column is-12 plan">
                       <div class="price-block">
                           <h3 class="title is-4 plan-name is-spaced">Pro</h3>
                           <p class="title is-2">$3.99<span class="is-size-5">/mo</span></p>
                           <p class="subtitle is-5">Billed yearly</p>
                           <div class="field">
                               <div class="control has-text-centered">
                                   <div class="select is-medium">
                                       <select>
                                           <!---->
                                           <!---->
                                           <option value="pro-5-yearly">
                                               5 Signatures
                                           </option>
                                           <!---->
                                           <option value="pro-10-yearly">
                                               10 Signatures
                                           </option>
                                           <!---->
                                           <option value="pro-25-yearly">
                                               25 Signatures
                                           </option>
                                           <!---->
                                           <!---->
                                           <!---->
                                           <option value="pro-50-yearly">
                                               50 Signatures
                                           </option>
                                           <!---->
                                           <option value="pro-100-yearly">
                                               100 Signatures
                                           </option>
                                           <!---->
                                           <!---->
                                           <!---->
                                           <option value="pro-unlimited-yearly">
                                               Unlimited Signatures
                                           </option>
                                       </select>
                                   </div>
                               </div>
                           </div>
                           <br> <a class="button is-primary is-medium has-extra-padding">Upgrade</a></div>
                       <div>
                           <ul class="plan-features">
                               <li><span class="icon has-text-primary"><i class="icon-check"></i></span> <span>Unlock All Pro Features</span></li>
                               <li><span class="icon has-text-primary"><i class="icon-check"></i></span> <span>Ability To Duplicate Signatures</span></li>
                               <li><span class="icon has-text-primary"><i class="icon-check"></i></span> <span>Ability To Create Generators</span></li>
                               <li><span class="icon has-text-primary"><i class="icon-check"></i></span> <span>Download Signatures</span></li>
                               <li><span class="icon has-text-primary"><i class="icon-check"></i></span> <span>Remove Signmyemails Branding</span></li>
                           </ul>
                       </div>
                   </div>
               </div>
               <div class="message is-primary">
                   <p class="message-body has-text-centered"><strong>7 Days Money-Back Guarantee.</strong> No Questions Asked.
                   </p>
               </div>
           </section>
           <!---->
       </div>
   </div>
   <!-- email to user model -->
   <div class="sweet-overlay emailto-user-model" tabindex="-1" style="opacity: 1.02; display: none;"></div>
   <div class="sweet-alert showSweetAlert emailto-user-model" data-custom-class="" data-has-cancel-button="true" data-has-confirm-button="true" data-allow-outside-click="false" data-has-done-function="true" data-animation="pop" data-timer="null" style="display: none; margin-top: -169px;">
       <div class="sa-icon sa-error" style="display: none;">
           <span class="sa-x-mark">
           <span class="sa-line sa-left"></span>
           <span class="sa-line sa-right"></span>
           </span>
       </div>
       <div class="sa-icon sa-warning" style="display: none;">
           <span class="sa-body"></span>
           <span class="sa-dot"></span>
       </div>
       <div class="sa-icon sa-info" style="display: block;"></div>
       <div class="sa-icon sa-success" style="display: none;">
           <span class="sa-line sa-tip"></span>
           <span class="sa-line sa-long"></span>

           <div class="sa-placeholder"></div>
           <div class="sa-fix"></div>
       </div>
       <div class="sa-icon sa-custom" style="display: none;"></div>
       <h2>Email Signature To User?</h2>
       <p style="display: block;">A link to install this signature will be sent to ravi@agile.com!</p>
       <fieldset>
           <input type="text" tabindex="3" placeholder="">
           <div class="sa-input-error"></div>
       </fieldset>
       <div class="sa-error-container">
           <div class="icon">!</div>
           <p>Not valid!</p>
       </div>
       <div class="sa-button-container">
           <button class="cancel cancel-user-popup" tabindex="2" style="display: inline-block; box-shadow: none;">Cancel</button>
           <div class="sa-confirm-button-container">
               <button class="confirm" tabindex="1" style="display: inline-block; background-color: rgb(0, 209, 178); box-shadow: rgba(0, 209, 178, 0.8) 0px 0px 2px, rgba(0, 0, 0, 0.05) 0px 0px 0px 1px inset;">Yes, Send it!</button>
               <div class="la-ball-fall">
                   <div></div>
                   <div></div>
                   <div></div>
               </div>
           </div>
       </div>
   </div>

   <!-- remove signatur popup -->
   <div class="sweet-overlay remove-signature-model" tabindex="-1" style="opacity: 1.02; display: none;"></div>
    <div class="sweet-alert showSweetAlert visible remove-signature-model" data-custom-class="" data-has-cancel-button="true" data-has-confirm-button="true" data-allow-outside-click="false" data-has-done-function="true" data-animation="pop" data-timer="null" style="display: none; margin-top: -169px;">
    <div class="sa-icon sa-error" style="display: none;">
        <span class="sa-x-mark">
        <span class="sa-line sa-left"></span>
        <span class="sa-line sa-right"></span>
        </span>
    </div>
    <div class="sa-icon sa-warning pulseWarning" style="display: block;">
        <span class="sa-body pulseWarningIns"></span>
        <span class="sa-dot pulseWarningIns"></span>
    </div>
    <div class="sa-icon sa-info" style="display: none;"></div>
    <div class="sa-icon sa-success" style="display: none;">
        <span class="sa-line sa-tip"></span>
        <span class="sa-line sa-long"></span>

        <div class="sa-placeholder"></div>
        <div class="sa-fix"></div>
    </div>
    <div class="sa-icon sa-custom" style="display: none;"></div>
    <h2>Are you sure?</h2>
    <p style="display: block;">You will not be able to recover this signature again!</p>
    <fieldset>
        <input type="text" tabindex="3" placeholder="">
        <div class="sa-input-error"></div>
    </fieldset>
    <div class="sa-error-container">
        <div class="icon">!</div>
        <p>Not valid!</p>
    </div>
    <div class="sa-button-container">
        <button class="cancel cancel-signature-popup" tabindex="2" style="display: inline-block; box-shadow: none;">Cancel</button>
        <div class="sa-confirm-button-container">
            <button class="confirm" tabindex="1" style="display: inline-block; background-color: rgb(221, 107, 85); box-shadow: rgba(221, 107, 85, 0.8) 0px 0px 2px, rgba(0, 0, 0, 0.05) 0px 0px 0px 1px inset;">Yes, delete it!</button>
            <div class="la-ball-fall">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</div>

   <install-modal></install-modal>
   <share-modal></share-modal>
</section>

<?php get_footer(); ?>


