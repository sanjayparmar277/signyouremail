<?php
/**
 * Template Name: Create Signature
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package signyouremail
 */
?>
<?php  echo get_header(); ?>

<form enctype='multipart/form-data' class="signature-form" action="<?php echo admin_url('admin-ajax.php'); ?>">

<div id="generator">
   <div class="columns is-mobile is-multiline is-gapless"><?php
/**
 * Template Name: Create Signature
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package signyouremail
 */
?>
<?php  echo get_header(); ?>

<form enctype='multipart/form-data' class="signature-form" action="<?php echo admin_url('admin-ajax.php'); ?>">

<div id="generator">
   <div class="columns is-mobile is-multiline is-gapless">
      <div class="column is-12-mobile is-12-tablet is-6-desktop">
         <div class="generator-fields">
            <div class="columns is-desktop is-gapless">
               <div class="column is-narrow">
                  <div class="form-tabs tabs is-medium is-vertical">
                     <ul class="has-text-centered">
                        <li class="tablinks is-active" onclick="openTabs(event, 'Basic')"><a><span><i class="icon-tasks"></i></span> <span>
                           Basic
                           </span></a>
                        </li>
                        <li class="tablinks" onclick="openTabs(event, 'Social')"><a><span><i class="icon-share-alt"></i></span> <span>
                           Social
                           </span></a>
                        </li>
                        <li class="tablinks" onclick="openTabs(event, 'Options')"><a><span><i class="icon-cog"></i></span> <span>
                           Options
                           </span></a>
                        </li>
                        <li class="tablinks" onclick="openTabs(event, 'Addons')"><a><span><i class="icon-plus"></i></span> <span>
                           Addons
                           </span></a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="column generator-simplebar" data-simplebar="init">
                  <div class="simplebar-track vertical" style="visibility: hidden;">
                     <div class="simplebar-scrollbar visible" style="top: 2px; height: 697px;"></div>
                  </div>
                  <div class="simplebar-track horizontal" style="visibility: hidden;">
                     <div class="simplebar-scrollbar"></div>
                  </div>
                  <div class="simplebar-scroll-content" style="padding-right: 17px; margin-bottom: -34px;">
                     <div class="simplebar-content" style="padding-bottom: 17px; margin-right: -17px;">
                        <div class="tabs-details">
                           <div id="Basic" class="tabcontent">
                              <h2 class="title is-4">Your Signature Details</h2>
                              
                                 <div class="columns is-widescreen is-multiline has-small-gap addAdonsFieldinput">
                                    <div class="column is-12">
                                       <div class="field">
                                          <label class="label">Full Name</label>
                                          <p class="control">
                                             <input name="basic[fullname]" type="text" placeholder="Full Name" class="input">
                                          </p>
                                       </div>
                                    </div>
                                    <div class="column is-12 is-half-widescreen">
                                       <div class="field">
                                          <label class="label">Job Title</label>
                                          <p class="control">
                                             <input name="basic[jobTitle]" type="text" placeholder="Job Title" class="input">
                                          </p>
                                       </div>
                                    </div>
                                    <div class="column is-12 is-half-widescreen">
                                       <div class="field">
                                          <label class="label">Company</label>
                                          <p class="control">
                                             <input name="basic[company]" type="text" placeholder="Company" class="input">
                                          </p>
                                       </div>
                                    </div>
                                    <div class="column is-12 is-half-widescreen">
                                       <div class="field">
                                          <label class="label">Website</label>
                                          <p class="control">
                                             <input name="basic[website]" type="text" placeholder="Website" class="input">
                                          </p>
                                       </div>
                                    </div>
                                    <div class="column is-12 is-half-widescreen">
                                       <div class="field">
                                          <label class="label">Email</label>
                                          <p class="control">
                                             <input name="basic[email]" type="text" placeholder="Email" class="input">
                                          </p>
                                       </div>
                                    </div>
                                    <div class="column is-12 is-half-widescreen">
                                       <div class="field">
                                          <label class="label">Phone</label>
                                          <p class="control">
                                             <input name="basic[phone]" type="text" placeholder="Phone" class="input">
                                          </p>
                                       </div>
                                    </div>
                                    <div class="column is-12 is-half-widescreen">
                                       <div class="field">
                                          <label class="label">Mobile</label>
                                          <p class="control">
                                             <input name="basic[mobile]" type="text" placeholder="Mobile" class="input">
                                          </p>
                                       </div>
                                    </div>
                                    <div class="column is-12">
                                       <div class="field">
                                          <label class="label">Logo/Avatar</label>
                                          <p class="control">
                                          <div>
                                             <img class="blah" src="<?php echo get_template_directory_uri(); ?>/images/avatar.png" style="max-width: 75px; background: rgb(255, 255, 255);">
                                             <a title="Remove image" class="delete is-medium"></a>
                                             <label><span class="button is-info is-fullwidth"><span class="icon is-small"><i class="icon-upload"></i></span> <span>Upload Image</span></span>
                                             <input type="file" name="image" accept="image/*" class="is-hidden" id="imgInp" name="basic[your_image]">
                                             </label>
                                             <div class="modal is-active " style="display: none;">
                                                <div class="modal-card" style="display: none;">
                                                   <header class="modal-card-head">
                                                      <p class="modal-card-title">Crop &amp; upload This Image</p>
                                                      <a class="delete"></a>
                                                   </header>
                                                   <section class="modal-card-body">
                                                      <div><img src="" alt="Source Image" style="max-width: 100%; max-height: 350px;"></div>
                                                   </section>
                                                   <footer class="modal-card-foot">
                                                      <div class="columns is-fullwidth is-gapless">
                                                         <div class="column">
                                                            <div class="buttons has-addons"><span class="button">1:1</span> <span class="button">2:3</span> <span class="button">16:9</span> <span class="button">Free</span></div>
                                                         </div>
                                                         <div class="column is-narrow has-text-left">
                                                            <div class="buttons"><span class="button">Cancel</span> <span class="button is-success">Done</span></div>
                                                         </div>
                                                      </div>
                                                   </footer>
                                                </div>
                                             </div>
                                          </div>
                                          </p>
                                       </div>
                                    </div>
                                    <div class="column is-12">
                                       <div class="field">
                                          <label class="label">Address</label>
                                          <p class="control">
                                             <input name="basic[address]" type="text" placeholder="Address" class="input">
                                          </p>
                                       </div>
                                    </div>
                                    <div class="column is-12 is-half-widescreen">
                                       <div class="field">
                                          <label class="label">Fax</label>
                                          <p class="control">
                                             <input name="basic[fax]" type="text" placeholder="Fax" class="input">
                                          </p>
                                       </div>
                                    </div>
                                    <div class="column is-12 is-half-widescreen">
                                       <div class="field">
                                          <label class="label">skype</label>
                                          <p class="control">
                                             <input name="basic[custom_fields][1][skype]" placeholder="skype" type="text" class="input">
                                             <input type="hidden" name="basic[custom_fields][1][type]" value="text"> 
                                             <input type="hidden" name="basic[custom_fields][1][name]" value="test456456"> 
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              
                              <br> <span class="button is-dark is-fullwidth addRemoveField"><span class="icon is-small"><i class="icon-plus"></i></span> <span>Add/Remove Additional Fields</span></span>
                              <div id="addRemoveFieldModel" class="modal is-active" style="display: none;">
                                 <div id="addRemoveFieldCard" class="modal-card" style="display: none;">
                                    <header class="modal-card-head">
                                       <p class="modal-card-title">Add Additional Fields</p>
                                       <a class="delete"></a>
                                    </header>
                                    <section class="modal-card-body wrapper">
                                       <div class="columns is-multiline addAdonsField">
                                          <div class="column is-12">
                                             <div class="field is-marginless">
                                                <div class="field-body">
                                                   <div class="field has-addons">
                                                      <p class="control">
                                                         <input type="text" placeholder="Field Name" class="input">
                                                      </p>
                                                      <p class="control is-expanded">
                                                         <input type="text" placeholder="Field Value" class="input">
                                                      </p>
                                                      <p class="control">
                                                         <span class="select is-fullwidth">
                                                            <select>
                                                               <option value="text">Text</option>
                                                               <option value="phone">Phone</option>
                                                               <option value="link">Link</option>
                                                            </select>
                                                         </span>
                                                      </p>
                                                      <div class="control"><span class="button is-danger"><span class="icon"><i class="icon-trash-o"></i></span> <span>Remove</span></span>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="columns">
                                          <div class="column is-12">
                                             <div class="field is-marginless">
                                                <label class="label has-text-dark">Add New Field</label>
                                                <div class="field-body">
                                                   <div class="field has-addons addNewField">
                                                      <p class="control">
                                                         <input type="text" placeholder="Field Name" class="input">
                                                      </p>
                                                      <p class="control is-expanded">
                                                         <input type="text" placeholder="Field Value" class="input">
                                                      </p>
                                                      <p class="control">
                                                         <span class="select is-fullwidth">
                                                            <select>
                                                               <option value="text">Text</option>
                                                               <option value="phone">Phone</option>
                                                               <option value="link">Link</option>
                                                            </select>
                                                         </span>
                                                      </p>
                                                      <div class="control"><span class="button is-info has-extra-padding"><span class="icon"><i class="icon-plus"></i></span> <span>Add</span></span>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </section>
                                    <footer class="modal-card-foot"><span class="button">Close</span></footer>
                                 </div>
                              </div>
                           </div>
                           <div id="Social" class="tabcontent" style="display: none;">
                              <div>
                                 <h2 class="title is-4">Your Social Media Profile Urls</h2>
                                 <div class="columns is-widescreen is-multiline">
                                    <div class="is-fullwidth">
                                       <div id="sortable">
                                          <div class="column is-12">
                                             <div class="field is-marginless">
                                                <label class="label">twitter</label>
                                                <div class="field-body">
                                                   <div class="field has-addons">
                                                      <p class="control is-expanded">
                                                         <input type="text" name="social[platforms][twiter]" placeholder="Twitter" class="input" aria-required="false" aria-invalid="false">
                                                      </p>
                                                      <div class="control"><span class="button is-danger"><i class="icon-trash-o"></i></span></div>
                                                      <div class="control"><span class="button is-info drag-handle"><i class="icon-align-justify"></i></span></div>
                                                   </div>
                                                </div>
                                                <span class="help has-text-danger" style="display: none;">Error: Please enter valid url to your social media profile not just the username.</span>
                                             </div>
                                          </div>
                                          <div class="column is-12 social-wrap ui-state-default">
                                             <div class="field is-marginless">
                                                <label class="label">facebook</label>
                                                <div class="field-body">
                                                   <div class="field has-addons">
                                                      <p class="control is-expanded">
                                                         <input type="text" name="social[platforms][facebook]" placeholder="Facebook" class="input" aria-required="false" aria-invalid="false">
                                                      </p>
                                                      <div class="control"><span class="button is-danger delete-btn"><i class="icon-trash-o"></i></span></div>
                                                      <div class="control"><span class="button is-info drag-handle"><i class="icon-align-justify"></i></span></div>
                                                   </div>
                                                </div>
                                                <span class="help has-text-danger" style="display: none;">Error: Please enter valid url to your social media profile not just the username.</span>
                                             </div>
                                          </div>
                                          <div class="column is-12 social-wrap ui-state-default">
                                             <div class="field is-marginless">
                                                <label class="label">instagram</label>
                                                <div class="field-body">
                                                   <div class="field has-addons">
                                                      <p class="control is-expanded">
                                                         <input type="text" name="social[platforms][instagram]" placeholder="Instagram" class="input" aria-required="false" aria-invalid="false">
                                                      </p>
                                                      <div class="control"><span class="button is-danger delete-btn"><i class="icon-trash-o"></i></span></div>
                                                      <div class="control"><span class="button is-info drag-handle"><i class="icon-align-justify"></i></span></div>
                                                   </div>
                                                </div>
                                                <span class="help has-text-danger" style="display: none;">Error: Please enter valid url to your social media profile not just the username.</span>
                                             </div>
                                          </div>
                                          <div class="column is-12 social-wrap ui-state-default">
                                             <div class="field is-marginless">
                                                <label class="label">linkedin</label>
                                                <div class="field-body">
                                                   <div class="field has-addons">
                                                      <p class="control is-expanded">
                                                         <input type="text" name="social[platforms][linkedin]" placeholder="Linkedin" class="input" aria-required="false" aria-invalid="false">
                                                      </p>
                                                      <div class="control"><span class="button is-danger delete-btn"><i class="icon-trash-o"></i></span></div>
                                                      <div class="control"><span class="button is-info drag-handle"><i class="icon-align-justify"></i></span></div>
                                                   </div>
                                                </div>
                                                <span class="help has-text-danger" style="display: none;">Error: Please enter valid url to your social media profile not just the username.</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <span class="button is-info is-fullwidth AddAnotherfield"><span class="icon is-small"><i class="icon-plus"></i></span> <span>Add Another</span></span>
                                 <br> <span class="help has-text-white">Note: enter full url to your social media profiles not just the usernames <br> (example: https://www.twiter.com/signmyemails)</span>
                                 <div class="modal is-active is-large addanotherfield-open" style="display: none;">
                                    <div class="modal-card addanotherfield-open" style="display: none;">
                                       <header class="modal-card-head">
                                          <p class="modal-card-title">Select Social Media Platform</p>
                                          <a class="delete addanotherfield-hide"></a>
                                       </header>
                                       <section class="modal-card-body">
                                          <div class="columns is-mobile is-multiline has-position-relative">
                                             <div class="upgrade-overlay">
                                                <div class="is-block has-text-centered">
                                                   <a class="button is-warning"><span class="icon"><i class="icon-unlock-alt"></i></span> <span>Upgrade To Pro</span></a> <span class="help has-text-white">Please upgrade to add more social media icons!</span>
                                                </div>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(59, 89, 152); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>facebook</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(29, 161, 242); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>twitter</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(0, 119, 181); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>linkedin</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(64, 93, 230); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>instagram</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(0, 175, 240); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>skype</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(221, 75, 57); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>google-plus</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(189, 8, 28); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>pinterest</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(234, 76, 137); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>dribbble</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(23, 105, 255); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>behance</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(5, 204, 71); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>deviantart</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(205, 32, 31); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>youtube</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(26, 183, 234); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>vimeo</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(0, 0, 0); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>medium</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(0, 99, 220); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>flickr</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(0, 153, 229); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>500px</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(213, 100, 28); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>etsy</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(51, 51, 51); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>github</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(175, 6, 6); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>yelp</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(88, 148, 66); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>tripadvisor</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(255, 136, 0); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>soundcloud</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(53, 70, 92); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>tumblr</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(244, 128, 36); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>stack-overflow</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(0, 135, 190); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>wordpress</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(168, 36, 0); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>quora</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(255, 252, 0); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>snapchat</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(46, 189, 89); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>spotify</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(2, 100, 102); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>xing</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(247, 195, 58); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>imdb</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(72, 142, 204); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>doximity</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(37, 211, 102); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>whatsapp</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(51, 51, 51); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>website</span>
                                                </span>
                                             </div>
                                             <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
                                                <span class="button is-success is-fullwidth" style="background-color: rgb(0, 116, 228); text-transform: capitalize;">
                                                   <span class="icon is-small">
                                                      <!---->
                                                   </span>
                                                   <span>zillow</span>
                                                </span>
                                             </div>
                                          </div>
                                       </section>
                                       <footer class="modal-card-foot"><span class="button is-success addanotherfield-hide">Done</span></footer>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div id="Options" class="tabcontent" style="display: none;">
                              <div>
                                 <h2 class="title is-4">Signature Options</h2>
                                 <div class="columns is-widescreen is-multiline">
                                    <div class="column is-half-widescreen is-12">
                                       <div class="picker-input">
                                          <div class="field is-marginless">
                                             <label class="label">Primary Color</label>
                                             <div class="field-body">
                                                <div class="field has-addons">
                                                   <label for="colorPicker">
                                                      <p class="control"><span class="button" style="border: 1px solid rgb(219, 219, 219); background-color: rgb(250, 250, 250);"><i class="icon" style="background-color: rgb(50, 115, 220); border-radius: 2px;"></i></span></p>
                                                   </label>
                                                   <p id="tab-full" class="control is-expanded">
                                                      <input type="text" id="colorPicker" class="cp-full input" name="options[primaryColor]" value="186aa7" />
                                                   </p>
                                                </div>
                                             </div>
                                          </div>
                                          <!---->
                                          <!-- <div>
                                             </div> -->
                                       </div>
                                       <p>
                                       <div id="colorSelector">
                                          <div style="background-color: #0000ff"></div>
                                       </div>
                                       </p>
                                       <!--  <pre>
                                          $('#colorSelector').ColorPicker({
                                              color: '#0000ff',
                                              onShow: function (colpkr) {
                                                  $(colpkr).fadeIn(500);
                                                  return false;
                                              },
                                              onHide: function (colpkr) {
                                                  $(colpkr).fadeOut(500);
                                                  return false;
                                              },
                                              onChange: function (hsb, hex, rgb) {
                                                  $('#colorSelector div').css('backgroundColor', '#' + hex);
                                              }
                                          });
                                          </pre> -->
                                    </div>
                                    <div class="column is-half-widescreen is-12">
                                       <div class="picker-input">
                                          <div class="field is-marginless">
                                             <label class="label">Secondary Color</label>
                                             <div class="field-body">
                                                <div class="field has-addons">
                                                   <label for="colorPicker1">
                                                      <p class="control"><span class="button" style="border: 1px solid rgb(219, 219, 219); background-color: rgb(250, 250, 250);"><i class="icon" style="background-color: rgb(50, 115, 220); border-radius: 2px;"></i></span></p>
                                                   </label>
                                                   <p id="tab-full" class="control is-expanded">
                                                      <input type="text" id="colorPicker1" class="cp-full input" name="options[secondaryColor]" value="186aa7" />
                                                   </p>
                                                </div>
                                             </div>
                                          </div>
                                          <!---->
                                       </div>
                                    </div>
                                    <div class="column is-half-widescreen is-12">
                                       <div class="field">
                                          <label class="label">Font Family</label>
                                          <p class="control">
                                             <span class="select is-fullwidth">
                                                <select name="options[fontFamily]">
                                                   <optgroup label="Sans-Serif">
                                                      <option value="Arial, sans-serif">Arial</option>
                                                      <option value="'Comic Sans MS', sans-serif">Comic Sans MS</option>
                                                      <option value="'Lucida Grande', sans-serif">Lucida Sans Unicode</option>
                                                      <option value="Tahoma, sans-serif">Tahoma</option>
                                                      <option value="'Trebuchet MS', sans-serif">Trebuchet MS</option>
                                                      <option value="Verdana, sans-serif">Verdana</option>
                                                   </optgroup>
                                                   <optgroup label="Monospace">
                                                      <option value="'Courier New', Courier, monospace">Courier New</option>
                                                      <option value="'Lucida Console', Monaco, monospace">Lucida Console</option>
                                                   </optgroup>
                                                   <optgroup label="Serif">
                                                      <option value="Georgia, serif">Georgia</option>
                                                      <option value="'Palatino Linotype', Palatino, serif">Palatino Linotype</option>
                                                      <option value="'Times New Roman', Times, serif">Times New Roman</option>
                                                   </optgroup>
                                                </select>
                                             </span>
                                          </p>
                                       </div>
                                    </div>
                                    <div class="column is-half-widescreen is-12">
                                       <div class="field">
                                          <label class="label">Font Size</label>
                                          <p class="control">
                                             <span class="select is-fullwidth">
                                                <select name="options[fontSize]">
                                                   <option value="11">Small</option>
                                                   <option value="12">Medium</option>
                                                   <option value="13">Large</option>
                                                   <option value="14">Extra Large</option>
                                                </select>
                                             </span>
                                          </p>
                                       </div>
                                    </div>
                                    <div class="column is-half-widescreen is-12">
                                       <div class="field">
                                          <label class="label">Logo/Avatar Size</label>
                                          <div class="field-body">
                                             <div class="field has-addons">
                                                <p for="amount" class="control"><span class="button" style="border: 1px solid rgb(219, 219, 219); background-color: rgb(250, 250, 250);">
                                                   <input name="options[logoSize]" type="text" id="amount" readonly style="border: 0;font-weight: bold;width: 26px;color: #363636;font-size: 1rem;">
                                                   </span>
                                                </p>
                                                <!-- <input type="range" min="50" max="180" step="1" class="input"> -->
                                                <!-- <label >Maximum price:</label> -->
                                                <!-- <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;"> -->
                                                <div class="input">
                                                   <div id="slider-range-min" style="width: 100%;"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- <label for="amount">Maximum price:</label>
                                       <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;"> -->
                                    <!-- <div id="slider-range-min"></div> -->
                                    <div class="column is-half-widescreen is-12">
                                       <div class="field">
                                          <label class="label">Logo/Avatar Radius</label>
                                          <p class="control">
                                             <span class="select is-fullwidth">
                                                <select name="options[logoRadius]">
                                                   <option value="0">Square</option>
                                                   <option value="5">Rounded Corners</option>
                                                   <option value="500">Circle</option>
                                                </select>
                                             </span>
                                          </p>
                                       </div>
                                    </div>
                                    <div class="column is-half-widescreen is-12">
                                       <div class="field">
                                          <label class="label">Job Title Separator</label>
                                          <p class="control">
                                             <span class="select is-fullwidth">
                                                <select name="options[titleSeperator]">
                                                   <option value="/">/</option>
                                                   <option value="|">|</option>
                                                   <option value="at">at</option>
                                                   <option value="newline">New line</option>
                                                </select>
                                             </span>
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <h2 class="title is-4">Social Media Icon Options</h2>
                                 <div class="columns is-widescreen is-multiline has-position-relative">
                                    <div class="column is-half-widescreen is-12">
                                       <div class="field">
                                          <label class="label">Icons Style</label>
                                          <p class="control">
                                             <span class="select is-fullwidth">
                                                <select name="options[upgrade][iconStyle]">
                                                   <option value="brand">Original Colors</option>
                                                   <option value="match">Custom Color</option>
                                                   <option value="text">Text</option>
                                                </select>
                                             </span>
                                          </p>
                                       </div>
                                    </div>
                                    <div class="column is-half-widescreen is-12">
                                       <div class="picker-input">
                                          <div class="field is-marginless">
                                             <label class="label">Icons Custom Color</label>
                                             <div class="field-body">
                                                <div class="field has-addons">
                                                   <p class="control"><span class="button" style="border: 1px solid rgb(219, 219, 219); background-color: rgb(250, 250, 250);"><i class="icon" style="background-color: rgb(50, 115, 220); border-radius: 2px;"></i></span></p>
                                                   <p class="control is-expanded">
                                                      <input class="input" name="options[upgrade][iconsCustomColor]">
                                                   </p>
                                                </div>
                                             </div>
                                          </div>
                                          <!---->
                                       </div>
                                    </div>
                                    <div class="column is-half-widescreen is-12">
                                       <div class="field">
                                          <label class="label">Icons Radius</label>
                                          <p class="control">
                                             <span class="select is-fullwidth">
                                                <select name="options[upgrade][iconRadius]">
                                                   <option value="0">Square</option>
                                                   <option value="5">Rounded Corners</option>
                                                   <option value="500">Circle</option>
                                                </select>
                                             </span>
                                          </p>
                                       </div>
                                    </div>
                                    <div class="upgrade-overlay">
                                       <div class="is-block has-text-centered">
                                          <a class="button is-warning"><span class="icon"><i class="icon-unlock-alt"></i></span> <span>Upgrade To Pro</span></a> <span class="help has-text-white">Please upgrade to customize social media icons!</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div id="Addons" class="tabcontent" style="display: none;">
                              <div>
                                 <!---->
                                 <h2 class="title is-4">Installed Addons</h2>
                                 <div id="accordion" class="installed-addons">
                                 </div>
                                 <br />
                                 <h2 class="title is-4">Signature Addons</h2>
                                 <div>
                                    <div class="card is-stacked">
                                       <header class="card-header has-info-bg">
                                          <h3 class="card-header-title is-uppercase">disclaimer</h3>
                                          <span class="card-header-button"><a class="button is-dark is-small addon-disclaimer"><span class="icon is-small"><i class="icon-plus"></i></span> <span>ADD</span></a>
                                          </span>
                                       </header>
                                    </div>
                                    <div class="card is-stacked">
                                       <header class="card-header has-info-bg">
                                          <h3 class="card-header-title is-uppercase">banner</h3>
                                          <span class="card-header-button"><a class="button is-dark is-small addon-banner"><span class="icon is-small"><i class="icon-plus"></i></span> <span>ADD</span></a>
                                          </span>
                                       </header>
                                    </div>
                                    <div class="card is-stacked">
                                       <header class="card-header has-info-bg">
                                          <h3 class="card-header-title is-uppercase">badges</h3>
                                          <span class="card-header-button"><a class="button is-dark is-small addon-badges"><span class="icon is-small"><i class="icon-plus"></i></span> <span>ADD</span></a>
                                          </span>
                                       </header>
                                    </div>
                                    <div class="card is-stacked">
                                       <header class="card-header has-info-bg">
                                          <h3 class="card-header-title is-uppercase">links</h3>
                                          <span class="card-header-button"><a class="button is-dark is-small addon-links"><span class="icon is-small"><i class="icon-plus"></i></span> <span>ADD</span></a>
                                          </span>
                                       </header>
                                    </div>
                                    <div class="card is-stacked">
                                       <header class="card-header has-info-bg">
                                          <h3 class="card-header-title is-uppercase">quote</h3>
                                          <span class="card-header-button"><a class="button is-dark is-small addon-quote"><span class="icon is-small"><i class="icon-plus"></i></span> <span>ADD</span></a>
                                          </span>
                                       </header>
                                    </div>
                                    <div class="card is-stacked">
                                       <header class="card-header has-info-bg">
                                          <h3 class="card-header-title is-uppercase">mobileApp</h3>
                                          <span class="card-header-button"><a class="button is-dark is-small addon-mobileApp"><span class="icon is-small"><i class="icon-plus"></i></span> <span>ADD</span></a>
                                          </span>
                                       </header>
                                    </div>
                                    <div class="card is-stacked">
                                       <header class="card-header has-info-bg">
                                          <h3 class="card-header-title is-uppercase">meeting</h3>
                                          <span class="card-header-button"><a class="button is-dark is-small addon-meeting"><span class="icon is-small"><i class="icon-plus"></i></span> <span>ADD</span></a>
                                          </span>
                                       </header>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="column is-12-mobile is-12-tablet is-6-desktop">
         <div class="signature-preview">
            <div class="signature-controls columns is-mobile">
               <div class="column is-narrow is-half">
			   <?php 
				  global $wpdb, $user;
				  $table_name = $wpdb->prefix . "signatures";
				  $userId = get_current_user_id();
				  $signature = $wpdb->get_results( "SELECT * FROM $table_name where user_id = $userId" );
				  echo"<pre>"; print_r($signature);
			   ?>
                  <div class="field">
                     <label class="label">Signatures:</label>
                     <p class="control">
                        <span class="select is-fullwidth">
                           <select name="signature_action">
                              <option value="new_signature">New Signature...</option>
                           </select>
                        </span>
                     </p>
                  </div>
               </div>
               <div class="column is-narrow is-half">
                  <div class="field">
                     <label class="label">Templates:</label>
                     <p class="control">
                        <span class="select is-fullwidth">
                           <select id="selectList" name="templates">
                              <!-- <option id="template0" value="0">
                                 Select
                                 </option> -->
                              <option id="template1" value="1">
                                 Template #1 <!---->
                              </option>
                              <option id="template2" value="2">
                                 Template #2 <!---->
                              </option>
                              <option id="template3" value="3">
                                 Template #3 <!---->
                              </option>
                              <option id="template4" value="4">
                                 Template #4 <!---->
                              </option>
                              <option id="template5" value="5">
                                 Template #5 <!---->
                              </option>
                              <option id="template6" value="6">
                                 Template #6 <!---->
                              </option>
                              <option id="template7" value="7">
                                 Template #7 <!---->
                              </option>
                              <option id="template8" value="8">
                                 Template #8 <!---->
                              </option>
                           </select>
                        </span>
                     </p>
                  </div>
               </div>
            </div>
            <div class="card">
               <header class="card-header">
                  <p class="card-header-title">
                     Signature Preview
                  </p>
               </header>
               <div class="card-content signature-container">
                  <!-- <div id="signature-outer" class="is-unselectable">
                     <div><span class="icon"><i class="is-loading"></i></span>Loading...</div>
                     </div> -->
                  <div id="signature-outer template1" class="is-unselectable template-style template-style1 active">
                     <table id="signature" cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; box-sizing: initial; max-width: 580px; color: #363636; border-collapse: collapse; line-height: 1.5;">
                        <tbody>
                           <tr>
                              <td valign="top">
                                 <table id="basic-table" width="" cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; border-collapse: collapse; color: #333; width: px; line-height: 16px;">
                                    <tbody>
                                       <tr>
                                          <td valign="top" width="104" style="padding-right: 10px;">
                                             <p style="margin: 0.75pt; line-height: 0px;">
                                                <a href="javascript:void(0)"> <img class="blah" src="<?php echo get_template_directory_uri(); ?>/images/avatar.png" alt="your image" width="102" height="102" style="background: rgb(255, 255, 255);" /> </a>
                                             </p>
                                          </td>
                                          <td valign="top" width="-114">
                                             <table cellpadding="0" cellspacing="0" border="0" width="-114" style="font-family: sans-serif; border-collapse: collapse; color: #333; width: -114px; line-height: 16px;">
                                                <tbody>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; color: #3273DC; font-size: 16px; font-family: Arial, sans-serif;" class="fullName"> John Doe </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top" style="padding-bottom: 4px;">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span class="jobTitle">Project Manager</span> <span>/</span> <span> <strong class="company">SignMyEmails LLC</strong> </span> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">A:</span> <span class="address">18 Maiya Road, Lake Hanshaven, Colorado, 62071</span> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">P:</span> <a href="tel:+1-253-424-1973" style="text-decoration: none; color: #333;" class="phone">+1 253 424 1973</a> <span>&nbsp;&nbsp;</span> <span style="font-weight: 700; color: #3273DC;">M:</span> <a href="tel:+1-342-336-9594" style="text-decoration: none; color: #333;" class="mobile">+1 342 336 9594</a><span class="faxadd" style="display: none;"><span style="font-weight: 700; color: #3273DC;">F:</span><a  class="faxno" href="tel:45863219" style="text-decoration: none; color: #333;">45863219</a></span> <span class="skypeadd" style="display: none;"><span style="font-weight: 700; color: #3273DC;">S:</span><a  class="skypeval" href="tel:45863219" style="text-decoration: none; color: #333;">45863219</a></span> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">E:</span> <a href="mailto:john@signmyemails.com" style="text-decoration: none; color: #333;" class="email">john@signmyemails.com</a> <span>&nbsp;&nbsp;</span> <span style="white-space: nowrap;"> <span style="font-weight: 700; color: #3273DC;">W:</span> <a href="javascript:void(0)" target="_blank" style="text-decoration: none; color: #333;" class="website">www.signyouremail.io</a> </span>
                                                         </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top" style="padding: 7px 0 2px;">
                                                         <table cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; border-collapse: collapse; color: #333; width: auto; line-height: 13px;">
                                                            <tbody>
                                                               <tr>
                                                                  <td class="twiTter" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="javascript:void(0)"> <img width="22" height="22" src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                                  <td class="faceBook" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="javascript:void(0)"> <img width="22" height="22" src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                                  <td class="istaGram" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="javascript:void(0)"> <img width="22" height="22" src="<?php echo get_template_directory_uri(); ?>/images/insta.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                                  <td class="linkedIn" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="javascript:void(0)"> <img width="22" height="22" src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                               </tr>
                                                            </tbody>
                                                         </table>
                                                      </td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
						   <tr><td valign="top" style="padding: 5px 0px;"><table width="100%" cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; border-collapse: collapse; color: #333; width: auto; line-height: 1.2;"><tbody><tr> <td valign="top" width="580" style="max-width: 100%;"> <p class="disclaimer" style="margin: 0.75pt; color: #666; font-size: 11px; line-height: 13px; font-family: Arial, sans-serif;"></p> </td> </tr></tbody></table></td></tr>
                           <tr id="signature-branding-line">
                              <td valign="top" style="padding: 8px 0;">
                                 <table width="180" cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; border-collapse: collapse; color: #333; line-height: 1.5; width: 180px;">
                                    <tbody>
                                       <tr>
                                          <td valign="top" nowrap="" style="border-top: 1px solid #ddd; padding-top: 3px;">
                                             <p style="margin: 0.75pt; font-size: 10px; font-family: Arial, sans-serif;"> <span style="color: #777;">Email Signature by</span> <a href="#" style="text-decoration: none; color: #3273DC;">SignYourEmail.io</a> </p>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <div id="signature-outer template2" class="is-unselectable template-style template-style2">
                     <table id="signature" cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; line-height: 1.4; box-sizing: initial; max-width: 580px; color: #363636; border-collapse: collapse;">
                        <tbody>
                           <tr>
                              <td valign="top">
                                 <table id="basic-table" cellpadding="0" cellspacing="0" border="0" width="" style="font-family: sans-serif; border-collapse: collapse; color: #333; width: px; line-height: 14px;">
                                    <tbody>
                                       <tr>
                                          <td valign="top" style="padding-bottom: 6px;">
                                             <table width="" cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; width: 100%; border-collapse: collapse; color: #333; line-height: 14px;">
                                                <tbody>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; color: #3273DC; font-size: 16px; line-height: 16px; font-family: Arial, sans-serif;" class="fullName"> John Doe </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span class="jobTitle">Project Manager</span> <span>/</span> <span> <strong class="company">SignMyEmails LLC</strong> </span> </p>
                                                      </td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td valign="top">
                                             <table cellpadding="0" cellspacing="0" border="0" width="" style="font-family: sans-serif; border-collapse: collapse; color: #333; width: px; line-height: 14px;">
                                                <tbody>
                                                   <tr>
                                                      <td valign="top" width="104" style="padding: 0 8px 0 0;">
                                                         <p style="margin: 0.75pt; line-height: 0px;">
                                                            <a href="javascript:void(0)"> <img class="blah" src="<?php echo get_template_directory_uri(); ?>/images/avatar.png" alt="your image" width="102" height="102" style="background: rgb(255, 255, 255);" /> </a>
                                                         </p>
                                                      </td>
                                                      <td valign="top" width="-112">
                                                         <table cellpadding="0" cellspacing="0" border="0" width="-112" style="font-family: sans-serif; border-collapse: collapse; color: #333; width: -112px; line-height: 14px;">
                                                            <tbody>
                                                               <tr>
                                                                  <td valign="top">
                                                                     <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">Phone:</span> <a href="tel:+1-253-424-1973" style="text-decoration: none; color: #333;" class="phone">+1 253 424 1973</a> </p>
                                                                  </td>
                                                               </tr>
                                                               <tr>
                                                                  <td valign="top">
                                                                     <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">Mobile:</span> <a href="tel:+1-342-336-9594" style="text-decoration: none; color: #333;" class="mobile">+1 342 336 9594</a><span class="faxadd" style="display: none;"><span style="font-weight: 700; color: #3273DC;">F:</span><a  class="faxno" href="tel:45863219" style="text-decoration: none; color: #333;">45863219</a></span> <span class="skypeadd" style="display: none;"><span style="font-weight: 700; color: #3273DC;">S:</span><a  class="skypeval" href="tel:45863219" style="text-decoration: none; color: #333;">45863219</a></span> </p>
                                                                  </td>
                                                               </tr>
                                                               <tr>
                                                                  <td valign="top">
                                                                     <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">Email:</span> <a href="mailto:john@signmyemails.com" style="text-decoration: none; color: #333;" class="email">john@signmyemails.com</a> </p>
                                                                  </td>
                                                               </tr>
                                                               <tr>
                                                                  <td valign="top">
                                                                     <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">Website:</span> <a href="javascript:void(0)" style="text-decoration: none; color: #333;" class="website">www.signyouremail.io</a> </p>
                                                                  </td>
                                                               </tr>
                                                               <tr>
                                                                  <td valign="top">
                                                                     <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">Address:</span> <span class="address">18 Maiya Road, Lake Hanshaven, Colorado, 62071</span> </p>
                                                                  </td>
                                                               </tr>
                                                               <tr>
                                                                  <td valign="top" style="padding: 7px 0 2px;">
                                                                     <table cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; border-collapse: collapse; color: #333; width: auto; line-height: 13px;">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td class="twiTter" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                                 <p style="margin: 0.75pt;">
                                                                                    <a href="https://www.twitter.com/signmyemails"> <img width="22" height="22" src="images/twitter.png" style="border: 0;"></a>
                                                                                 </p>
                                                                              </td>
                                                                              <td class="faceBook" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                                 <p style="margin: 0.75pt;">
                                                                                    <a href="https://www.facebook.com/signmyemails"> <img width="22" height="22" src="images/facebook.png" style="border: 0;"></a>
                                                                                 </p>
                                                                              </td>
                                                                              <td class="istaGram" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                                 <p style="margin: 0.75pt;">
                                                                                    <a href="https://www.instagram.com/signmyemails"> <img width="22" height="22" src="images/insta.png" style="border: 0;"></a>
                                                                                 </p>
                                                                              </td>
                                                                              <td class="linkedIn" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                                 <p style="margin: 0.75pt;">
                                                                                    <a href="https://www.linkedin.com/signmyemails"> <img width="22" height="22" src="images/linkedin.png" style="border: 0;"></a>
                                                                                 </p>
                                                                              </td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </td>
                                                               </tr>
                                                            </tbody>
                                                         </table>
                                                      </td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                           <tr id="signature-branding-line">
                              <td valign="top" style="padding: 8px 0;">
                                 <table width="180" cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; line-height: 1.4; border-collapse: collapse; color: #333; width: 180px;">
                                    <tbody>
                                       <tr>
                                          <td valign="top" nowrap="" style="border-top: 1px solid #ddd; padding-top: 3px;">
                                             <p style="margin: 0.75pt; font-size: 10px; font-family: Arial, sans-serif;"> <span style="color: #777;">Email Signature by</span> <a href="#" style="text-decoration: none; color: #3273DC;">SignYourEmail.io</a> </p>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <div id="signature-outer template3" class="is-unselectable template-style template-style3">
                     <table id="signature" cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; line-height: 1.4; box-sizing: initial; max-width: 580px; color: #363636; border-collapse: collapse;">
                        <tbody>
                           <tr>
                              <td valign="top">
                                 <table id="basic-table" width="" cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; border-collapse: collapse; color: #333; width: px; line-height: 14px;">
                                    <tbody>
                                       <tr>
                                          <td valign="top" width="">
                                             <table width="" cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; border-collapse: collapse; color: #333; width: px; line-height: 14px;">
                                                <tbody>
                                                   <tr>
                                                      <td valign="top" style="padding: 0 0 12px 0;">
                                                         <p style="margin: 0.75pt; line-height: 0px;">
                                                            <a href="javascript:void(0)"> <img class="blah" src="<?php echo get_template_directory_uri(); ?>/images/avatar.png" alt="your image" width="102" height="102" style="background: rgb(255, 255, 255);" /> </a>
                                                         </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; color: #3273DC; font-size: 16px; line-height: 16px; font-family: Arial, sans-serif;" class="fullName"> John Doe </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top" style="padding-bottom: 4px;">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span class="jobTitle">Project Manager</span> <span>/</span> <span> <strong class="company">SignMyEmails LLC</strong> </span> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">Phone:</span> <span> <a href="tel:+1-253-424-1973" style="text-decoration: none; color: #333;" class="phone">+1 253 424 1973</a> </span> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">Mobile:</span> <span> <a href="tel:+1-342-336-9594" style="text-decoration: none; color: #333;" class="mobile">+1 342 336 9594</a><span class="faxadd" style="display: none;"><span style="font-weight: 700; color: #3273DC;">F:</span><a  class="faxno" href="tel:45863219" style="text-decoration: none; color: #333;">45863219</a></span> <span class="skypeadd" style="display: none;"><span style="font-weight: 700; color: #3273DC;">S:</span><a  class="skypeval" href="tel:45863219" style="text-decoration: none; color: #333;">45863219</a></span> </span> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">Email:</span> <span> <a href="mailto:john@signmyemails.com" style="text-decoration: none; color: #333;" class="email">john@signmyemails.com</a> </span> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">Website:</span> <span> <a href="javascript:void(0)" target="_blank" style="text-decoration: none; color: #333;" class="website">www.signyouremail.io</a> </span> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">Address:</span> <span class="address">18 Maiya Road, Lake Hanshaven, Colorado, 62071</span> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top" style="padding: 7px 0 2px;">
                                                         <table cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; border-collapse: collapse; color: #333; width: auto; line-height: 13px;">
                                                            <tbody>
                                                               <tr>
                                                                  <td class="twiTter" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="https://www.twitter.com/signmyemails"> <img width="22" height="22" src="images/twitter.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                                  <td class="faceBook" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="https://www.facebook.com/signmyemails"> <img width="22" height="22" src="images/facebook.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                                  <td class="istaGram" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="https://www.instagram.com/signmyemails"> <img width="22" height="22" src="images/insta.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                                  <td class="linkedIn" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="https://www.linkedin.com/signmyemails"> <img width="22" height="22" src="images/linkedin.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                               </tr>
                                                            </tbody>
                                                         </table>
                                                      </td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                           <tr id="signature-branding-line">
                              <td valign="top" style="padding: 8px 0;">
                                 <table width="180" cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; line-height: 1.4; border-collapse: collapse; color: #333; width: 180px;">
                                    <tbody>
                                       <tr>
                                          <td valign="top" nowrap="" style="border-top: 1px solid #ddd; padding-top: 3px;">
                                             <p style="margin: 0.75pt; font-size: 10px; font-family: Arial, sans-serif;"> <span style="color: #777;">Email Signature by</span> <a href="#" style="text-decoration: none; color: #3273DC;">SignYourEmail.io</a> </p>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <div id="signature-outer template4" class="is-unselectable template-style template-style4">
                     <table id="signature" cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; line-height: 1.4; box-sizing: initial; max-width: 580px; color: #363636; border-collapse: collapse;">
                        <tbody>
                           <tr>
                              <td valign="top">
                                 <table id="basic-table" cellpadding="0" cellspacing="0" border="0" width="" style="font-family: sans-serif; border-collapse: collapse; color: #333; width: px; line-height: 14px;">
                                    <tbody>
                                       <tr>
                                          <td valign="top" width="104" style="padding-right: 8px;">
                                             <p style="margin: 0.75pt; line-height: 0px;">
                                                <a href="javascript:void(0)"> <img class="blah" src="<?php echo get_template_directory_uri(); ?>/images/avatar.png" alt="your image" width="102" height="102" style="background: rgb(255, 255, 255);" /> </a>
                                             </p>
                                          </td>
                                          <td valign="top" width="-112">
                                             <table cellpadding="0" cellspacing="0" border="0" width="-112" style="font-family: sans-serif; border-collapse: collapse; color: #333; width: -112px; line-height: 14px;">
                                                <tbody>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; color: #3273DC; font-size: 16px; line-height: 16px; font-family: Arial, sans-serif;" class="fullName"> John Doe </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top" style="padding-bottom: 4px;">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span class="jobTitle">Project Manager</span> <span>/</span> <span> <strong class="company">SignMyEmails LLC</strong> </span> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">Phone:</span> <a href="tel:+1-253-424-1973" style="text-decoration: none; color: #333;" class="phone">+1 253 424 1973</a> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">Mobile:</span> <a href="tel:+1-342-336-9594" style="text-decoration: none; color: #333;" class="mobile">+1 342 336 9594</a><span class="faxadd" style="display: none;"><span style="font-weight: 700; color: #3273DC;">F:</span><a  class="faxno" href="tel:45863219" style="text-decoration: none; color: #333;">45863219</a></span> <span class="skypeadd" style="display: none;"><span style="font-weight: 700; color: #3273DC;">S:</span><a  class="skypeval" href="tel:45863219" style="text-decoration: none; color: #333;">45863219</a></span> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">Email:</span> <a href="mailto:john@signmyemails.com" style="text-decoration: none; color: #333;" class="email">john@signmyemails.com</a> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">Website:</span> <a href="javascript:void(0)" style="text-decoration: none; color: #333;" class="website">www.signyouremail.io</a> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">Address:</span> <span class="address">18 Maiya Road, Lake Hanshaven, Colorado, 62071</span> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top" style="padding: 7px 0 2px;">
                                                         <table cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; border-collapse: collapse; color: #333; width: auto; line-height: 13px;">
                                                            <tbody>
                                                               <tr>
                                                                  <td class="twiTter" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="https://www.twitter.com/signmyemails"> <img width="22" height="22" src="images/twitter.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                                  <td class="faceBook" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="https://www.facebook.com/signmyemails"> <img width="22" height="22" src="images/facebook.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                                  <td class="istaGram" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="https://www.instagram.com/signmyemails"> <img width="22" height="22" src="images/insta.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                                  <td class="linkedIn" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="https://www.linkedin.com/signmyemails"> <img width="22" height="22" src="images/linkedin.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                               </tr>
                                                            </tbody>
                                                         </table>
                                                      </td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                           <tr id="signature-branding-line">
                              <td valign="top" style="padding: 8px 0;">
                                 <table width="180" cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; line-height: 1.4; border-collapse: collapse; color: #333; width: 180px;">
                                    <tbody>
                                       <tr>
                                          <td valign="top" nowrap="" style="border-top: 1px solid #ddd; padding-top: 3px;">
                                             <p style="margin: 0.75pt; font-size: 10px; font-family: Arial, sans-serif;"> <span style="color: #777;">Email Signature by</span> <a href="#" style="text-decoration: none; color: #3273DC;">SignYourEmail.io</a> </p>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <div id="signature-outer template5" class="is-unselectable template-style template-style5">
                     <table id="signature" cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; line-height: 1.4; box-sizing: initial; max-width: 580px; color: #363636; border-collapse: collapse;">
                        <tbody>
                           <tr>
                              <td valign="top">
                                 <table id="basic-table" width="" cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; border-collapse: collapse; color: #333; width: px; line-height: 16px;">
                                    <tbody>
                                       <tr>
                                          <td valign="top" width="104" style="padding-right: 8px;">
                                             <p style="margin: 0.75pt; line-height: 0px;">
                                                <a href="javascript:void(0)"> <img class="blah" src="<?php echo get_template_directory_uri(); ?>/images/avatar.png" alt="your image" width="102" height="102" style="background: rgb(255, 255, 255);" /> </a>
                                             </p>
                                          </td>
                                          <td valign="top" width="-112">
                                             <table width="-112" cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; border-collapse: collapse; color: #333; width: -112px; line-height: 16px;">
                                                <tbody>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;" class="fullname">John Doe</span> <span>/</span> <span class="jobTitle">Project Manager</span> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top" style="padding-bottom: 6px;">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span> <strong class="company">SignMyEmails LLC</strong> </span> <span>/</span> <a href="javascript:void(0)" target="_blank" style="text-decoration: none; color: #3273DC;">www.signyouremail.io</a> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <a href="mailto:john@signmyemails.com" target="_blank" style="text-decoration: none; color: #3273DC;">john@signmyemails.com</a> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="color: #3273DC; font-weight: 700;">P:</span> <a href="tel:+1-253-424-1973" style="text-decoration: none; color: #333;" class="phone">+1 253 424 1973</a> <span>/</span> <span style="color: #3273DC; font-weight: 700;">M:</span> <a href="tel:+1-342-336-9594" style="text-decoration: none; color: #333;" class="mobile">+1 342 336 9594</a><span class="faxadd" style="display: none;"><span style="font-weight: 700; color: #3273DC;">F:</span><a  class="faxno" href="tel:45863219" style="text-decoration: none; color: #333;">45863219</a></span> <span class="skypeadd" style="display: none;"><span style="font-weight: 700; color: #3273DC;">S:</span><a  class="skypeval" href="tel:45863219" style="text-decoration: none; color: #333;">45863219</a></span> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="color: #3273DC; font-weight: 700;">A:</span> <span class="address">18 Maiya Road, Lake Hanshaven, Colorado, 62071</span> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top" style="padding: 7px 0 2px;">
                                                         <table cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; border-collapse: collapse; color: #333; width: auto; line-height: 13px;">
                                                            <tbody>
                                                               <tr>
                                                                  <td class="twiTter" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="https://www.twitter.com/signmyemails"> <img width="22" height="22" src="images/twitter.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                                  <td class="faceBook" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="https://www.facebook.com/signmyemails"> <img width="22" height="22" src="images/facebook.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                                  <td class="istaGram" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="https://www.instagram.com/signmyemails"> <img width="22" height="22" src="images/insta.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                                  <td class="linkedIn" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="https://www.linkedin.com/signmyemails"> <img width="22" height="22" src="images/linkedin.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                               </tr>
                                                            </tbody>
                                                         </table>
                                                      </td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                           <tr id="signature-branding-line">
                              <td valign="top" style="padding: 8px 0;">
                                 <table width="180" cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; line-height: 1.4; border-collapse: collapse; color: #333; width: 180px;">
                                    <tbody>
                                       <tr>
                                          <td valign="top" nowrap="" style="border-top: 1px solid #ddd; padding-top: 3px;">
                                             <p style="margin: 0.75pt; font-size: 10px; font-family: Arial, sans-serif;"> <span style="color: #777;">Email Signature by</span> <a href="#" style="text-decoration: none; color: #3273DC;">SignYourEmail.io</a> </p>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <div id="signature-outer template6" class="is-unselectable template-style template-style6">
                     <table id="signature" cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; line-height: 1.4; box-sizing: initial; max-width: 580px; color: #363636; border-collapse: collapse;">
                        <tbody>
                           <tr>
                              <td valign="top">
                                 <table id="basic-table" width="" cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; border-collapse: collapse; color: #333; width: px; line-height: 14px;">
                                    <tbody>
                                       <tr>
                                          <td valign="top" width="">
                                             <table width="" cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; border-collapse: collapse; color: #333; width: px; line-height: 14px;">
                                                <tbody>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; color: #3273DC; font-weight: 700; font-size: 12px; font-family: Arial, sans-serif;" class="fullName"> John Doe </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top" style="padding-bottom: 4px;">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span class="jobTitle">Project Manager</span> <span>/</span> <span> <strong class="company">SignMyEmails LLC</strong> </span> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top" style="padding: 12px 0 8px 0;">
                                                         <p style="margin: 0.75pt; line-height: 0px;">
                                                            <a href="javascript:void(0)"> <img class="blah" src="<?php echo get_template_directory_uri(); ?>/images/avatar.png" alt="your image" width="102" height="102" style="background: rgb(255, 255, 255);" /> </a>
                                                         </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">Phone:</span> <span> <a href="tel:+1-253-424-1973" style="text-decoration: none; color: #333;" class="phone">+1 253 424 1973</a> </span> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">Mobile:</span> <span> <a href="tel:+1-342-336-9594" style="text-decoration: none; color: #333;" class="mobile">+1 342 336 9594</a><span class="faxadd" style="display: none;"><span style="font-weight: 700; color: #3273DC;">F:</span><a  class="faxno" href="tel:45863219" style="text-decoration: none; color: #333;">45863219</a></span> <span class="skypeadd" style="display: none;"><span style="font-weight: 700; color: #3273DC;">S:</span><a  class="skypeval" href="tel:45863219" style="text-decoration: none; color: #333;">45863219</a></span> </span> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">Email:</span> <span> <a href="mailto:john@signmyemails.com" style="text-decoration: none; color: #333;" class="email">john@signmyemails.com</a> </span> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">Website:</span> <span> <a href="javascript:void(0)" target="_blank" style="text-decoration: none; color: #333;" class="website">www.signyouremail.io</a> </span> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">Address:</span> <span class="address">18 Maiya Road, Lake Hanshaven, Colorado, 62071</span> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top" style="padding: 7px 0 2px;">
                                                         <table cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; border-collapse: collapse; color: #333; width: auto; line-height: 13px;">
                                                            <tbody>
                                                               <tr>
                                                                  <td class="twiTter" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="https://www.twitter.com/signmyemails"> <img width="22" height="22" src="images/twitter.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                                  <td class="faceBook" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="https://www.facebook.com/signmyemails"> <img width="22" height="22" src="images/facebook.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                                  <td class="istaGram" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="https://www.instagram.com/signmyemails"> <img width="22" height="22" src="images/insta.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                                  <td class="linkedIn" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="https://www.linkedin.com/signmyemails"> <img width="22" height="22" src="images/linkedin.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                               </tr>
                                                            </tbody>
                                                         </table>
                                                      </td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                           <tr id="signature-branding-line">
                              <td valign="top" style="padding: 8px 0;">
                                 <table width="180" cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; line-height: 1.4; border-collapse: collapse; color: #333; width: 180px;">
                                    <tbody>
                                       <tr>
                                          <td valign="top" nowrap="" style="border-top: 1px solid #ddd; padding-top: 3px;">
                                             <p style="margin: 0.75pt; font-size: 10px; font-family: Arial, sans-serif;"> <span style="color: #777;">Email Signature by</span> <a href="#" style="text-decoration: none; color: #3273DC;">SignYourEmail.io</a> </p>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <div id="signature-outer template7" class="is-unselectable template-style template-style7">
                     <table id="signature" cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; box-sizing: initial; max-width: 580px; color: #363636; border-collapse: collapse; line-height: 1.5;">
                        <tbody>
                           <tr>
                              <td valign="top">
                                 <table id="basic-table" cellpadding="0" cellspacing="0" border="0" width="" style="font-family: sans-serif; border-collapse: collapse; color: #333; width: px; line-height: 16px;">
                                    <tbody>
                                       <tr>
                                          <td valign="top" width="-129" style="border-left: 3px solid #3273DC; padding-left: 12px;">
                                             <table cellpadding="0" cellspacing="0" border="0" width="-129" style="font-family: sans-serif; border-collapse: collapse; color: #333; width: -129px; line-height: 16px;">
                                                <tbody>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; color: #3273DC; font-size: 16px; font-family: Arial, sans-serif;" class="fullName"> John Doe </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top" style="padding-bottom: 4px;">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span class="jobTitle">Project Manager</span> <span>/</span> <span> <strong class="company">SignMyEmails LLC</strong> </span> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">A:</span> <span class="address">18 Maiya Road, Lake Hanshaven, Colorado, 62071</span> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">P:</span> <a href="tel:+1-253-424-1973" style="text-decoration: none; color: #333;" class="phone">+1 253 424 1973</a> <span>&nbsp;&nbsp;</span> <span style="font-weight: 700; color: #3273DC;">M:</span> <a href="tel:+1-342-336-9594" style="text-decoration: none; color: #333;" class="mobile">+1 342 336 9594</a><span class="faxadd" style="display: none;"><span style="font-weight: 700; color: #3273DC;">F:</span><a  class="faxno" href="tel:45863219" style="text-decoration: none; color: #333;">45863219</a></span> <span class="skypeadd" style="display: none;"><span style="font-weight: 700; color: #3273DC;">S:</span><a  class="skypeval" href="tel:45863219" style="text-decoration: none; color: #333;">45863219</a></span> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">E:</span> <a href="mailto:john@signmyemails.com" style="text-decoration: none; color: #333;" class="email">john@signmyemails.com</a> <span>&nbsp;&nbsp;</span> <span style="white-space: nowrap;"> <span style="font-weight: 700; color: #3273DC;">W:</span> <a href="javascript:void(0)" target="_blank" style="text-decoration: none; color: #333;" class="website">www.signyouremail.io</a> </span>
                                                         </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top" style="padding: 7px 0 2px;">
                                                         <table cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; border-collapse: collapse; color: #333; width: auto; line-height: 13px;">
                                                            <tbody>
                                                               <tr>
                                                                  <td class="twiTter" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="https://www.twitter.com/signmyemails"> <img width="22" height="22" src="images/twitter.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                                  <td class="faceBook" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="https://www.facebook.com/signmyemails"> <img width="22" height="22" src="images/facebook.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                                  <td class="istaGram" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="https://www.instagram.com/signmyemails"> <img width="22" height="22" src="images/insta.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                                  <td class="linkedIn" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="https://www.linkedin.com/signmyemails"> <img width="22" height="22" src="images/linkedin.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                               </tr>
                                                            </tbody>
                                                         </table>
                                                      </td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </td>
                                          <td width="25"></td>
                                          <td valign="top" width="104" style="padding-left: 10px;">
                                             <p style="margin: 0.75pt; line-height: 0px;">
                                                <a href="javascript:void(0)"> <img class="blah" src="<?php echo get_template_directory_uri(); ?>/images/avatar.png" alt="your image" width="102" height="102" style="background: rgb(255, 255, 255);" /> </a>
                                             </p>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                           <tr id="signature-branding-line">
                              <td valign="top" style="padding: 8px 0;">
                                 <table width="180" cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; border-collapse: collapse; color: #333; line-height: 1.5; width: 180px;">
                                    <tbody>
                                       <tr>
                                          <td valign="top" nowrap="" style="border-top: 1px solid #ddd; padding-top: 3px;">
                                             <p style="margin: 0.75pt; font-size: 10px; font-family: Arial, sans-serif;"> <span style="color: #777;">Email Signature by</span> <a href="#" style="text-decoration: none; color: #3273DC;">SignYourEmail.io</a> </p>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <div id="signature-outer template8" class="is-unselectable template-style template-style8">
                     <table id="signature" cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; box-sizing: initial; max-width: 580px; color: #363636; border-collapse: collapse; line-height: 1.5;">
                        <tbody>
                           <tr>
                              <td valign="top">
                                 <table id="basic-table" cellpadding="0" cellspacing="0" border="0" width="" style="font-family: sans-serif; border-collapse: collapse; color: #333; width: px; line-height: 16px;">
                                    <tbody>
                                       <tr>
                                          <td valign="top" width="-129" style="border-left: 3px solid #3273DC; padding-left: 12px;">
                                             <table cellpadding="0" cellspacing="0" border="0" width="-129" style="font-family: sans-serif; border-collapse: collapse; color: #333; width: -129px; line-height: 16px;">
                                                <tbody>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; color: #3273DC; font-size: 16px; font-family: Arial, sans-serif;" class="fullName"> John Doe </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top" style="padding-bottom: 4px;">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span class="jobTitle">Project Manager</span> <span>/</span> <span> <strong class="company">SignMyEmails LLC</strong> </span> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">A:</span> <span class="address">18 Maiya Road, Lake Hanshaven, Colorado, 62071</span> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">P:</span> <a href="tel:+1-253-424-1973" style="text-decoration: none; color: #333;" class="phone">+1 253 424 1973</a> <span>&nbsp;&nbsp;</span> <span style="font-weight: 700; color: #3273DC;">M:</span> <a href="tel:+1-342-336-9594" style="text-decoration: none; color: #333;" class="mobile">+1 342 336 9594</a><span class="faxadd" style="display: none;"><span style="font-weight: 700; color: #3273DC;">F:</span><a  class="faxno" href="tel:45863219" style="text-decoration: none; color: #333;">45863219</a></span> <span class="skypeadd" style="display: none;"><span style="font-weight: 700; color: #3273DC;">S:</span><a  class="skypeval" href="tel:45863219" style="text-decoration: none; color: #333;">45863219</a></span> </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top">
                                                         <p style="margin: 0.75pt; font-size: 12px; font-family: Arial, sans-serif;"> <span style="font-weight: 700; color: #3273DC;">E:</span> <a href="mailto:john@signmyemails.com" style="text-decoration: none; color: #333;" class="email">john@signmyemails.com</a> <span>&nbsp;&nbsp;</span> <span style="white-space: nowrap;"> <span style="font-weight: 700; color: #3273DC;">W:</span> <a href="javascript:void(0)" target="_blank" style="text-decoration: none; color: #333;" class="website">www.signyouremail.io</a> </span>
                                                         </p>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td valign="top" style="padding: 7px 0 2px;">
                                                         <table cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; border-collapse: collapse; color: #333; width: auto; line-height: 13px;">
                                                            <tbody>
                                                               <tr>
                                                                  <td class="twiTter" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="https://www.twitter.com/signmyemails"> <img width="22" height="22" src="images/twitter.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                                  <td class="faceBook" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="https://www.facebook.com/signmyemails"> <img width="22" height="22" src="images/facebook.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                                  <td class="istaGram" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="https://www.instagram.com/signmyemails"> <img width="22" height="22" src="images/insta.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                                  <td class="linkedIn" valign="top" width="24" style="padding-right: 4px; display: none;">
                                                                     <p style="margin: 0.75pt;">
                                                                        <a href="https://www.linkedin.com/signmyemails"> <img width="22" height="22" src="images/linkedin.png" style="border: 0;"></a>
                                                                     </p>
                                                                  </td>
                                                               </tr>
                                                            </tbody>
                                                         </table>
                                                      </td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </td>
                                          <td width="25"></td>
                                          <td valign="top" width="104" style="padding-left: 10px;">
                                             <p style="margin: 0.75pt; line-height: 0px;">
                                                <a href="javascript:void(0)"> <img class="blah" src="<?php echo get_template_directory_uri(); ?>/images/avatar.png" alt="your image" width="102" height="102" style="background: rgb(255, 255, 255);" /> </a>
                                             </p>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                           <tr id="signature-branding-line">
                              <td valign="top" style="padding: 8px 0;">
                                 <table width="180" cellpadding="0" cellspacing="0" border="0" style="font-family: sans-serif; border-collapse: collapse; color: #333; line-height: 1.5; width: 180px;">
                                    <tbody>
                                       <tr>
                                          <td valign="top" nowrap="" style="border-top: 1px solid #ddd; padding-top: 3px;">
                                             <p style="margin: 0.75pt; font-size: 10px; font-family: Arial, sans-serif;"> <span style="color: #777;">Email Signature by</span> <a href="#" style="text-decoration: none; color: #3273DC;">SignYourEmail.io</a> </p>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <!---->
                  <a class="button is-small is-warning remove-branding-button"><span class="icon"><i class="icon-close"></i></span> <span>Remove Branding</span></a>
               </div>
            </div>
            <br>
            <div class="columns is-multiline">
               <div class="column is-12 is-7-widescreen">
                  <a class="button is-success is-medium is-fullwidth is-expanded is-uppercase save-install-button" name="save_and_install"><span class="icon"><i class="icon-floppy-o"></i></span> <span>Save &amp; Install Signature</span></a>
               </div>
               <div class="column is-12 is-5-widescreen">
                  <a name="save_as_generator" class="button is-dark is-medium is-fullwidth is-uppercase save-install-button"><span class="icon"><i class="icon-floppy-o"></i></span> <span>Save As Generator</span></a>
               </div>
            </div>
            <span class="help is-size-6 has-text-right">Need Help? <a href="mailto:support@signmyemails.com" class="has-text-underlined has-text-info">Contact Us</a></span>
         </div>
      </div>
   </div>
   <div class="modal is-active is-large" style="display: none;">
      <div class="modal-card" style="display: none;">
         <header class="modal-card-head">
            <p class="modal-card-title">Install Signature</p>
            <a class="delete"></a>
         </header>
         <section class="modal-card-body">
            <div class="notification is-success is-small"><span class="icon"><i class="icon-check"></i></span> <span>Signature Saved Successfully!</span></div>
            <!---->
            <div class="how-to-install">
               <div>
                  <p><strong>Please select your email client to install your signature:</strong></p>
                  <div class="columns is-multiline is-gapless is-mobile">
                     <div class="column is-2-desktop is-3-tablet is-half-mobile">
                        <div class="email-client-block">
                           <div class="email-client-image-block"><img src="https://cdn.signmyemails.com/images/email_clients/outlook.png" alt="Outlook"></div>
                           <span>Outlook</span>
                        </div>
                     </div>
                     <div class="column is-2-desktop is-3-tablet is-half-mobile">
                        <div class="email-client-block">
                           <div class="email-client-image-block"><img src="https://cdn.signmyemails.com/images/email_clients/apple-mail.png" alt="Apple Mail"></div>
                           <span>Apple Mail</span>
                        </div>
                     </div>
                     <div class="column is-2-desktop is-3-tablet is-half-mobile">
                        <div class="email-client-block">
                           <div class="email-client-image-block"><img src="https://cdn.signmyemails.com/images/email_clients/gmail.png" alt="Gmail"></div>
                           <span>Gmail</span>
                        </div>
                     </div>
                     <div class="column is-2-desktop is-3-tablet is-half-mobile">
                        <div class="email-client-block">
                           <div class="email-client-image-block"><img src="https://cdn.signmyemails.com/images/email_clients/mail-app-iphone.png" alt="Mail App iPhone"></div>
                           <span>Mail App iPhone</span>
                        </div>
                     </div>
                     <div class="column is-2-desktop is-3-tablet is-half-mobile">
                        <div class="email-client-block">
                           <div class="email-client-image-block"><img src="https://cdn.signmyemails.com/images/email_clients/thunderbird.png" alt="Thunderbird"></div>
                           <span>Thunderbird</span>
                        </div>
                     </div>
                     <div class="column is-2-desktop is-3-tablet is-half-mobile">
                        <div class="email-client-block">
                           <div class="email-client-image-block"><img src="https://cdn.signmyemails.com/images/email_clients/yahoo-mail.png" alt="Yahoo Mail"></div>
                           <span>Yahoo Mail</span>
                        </div>
                     </div>
                     <div class="column is-2-desktop is-3-tablet is-half-mobile">
                        <div class="email-client-block">
                           <div class="email-client-image-block"><img src="https://cdn.signmyemails.com/images/email_clients/godaddy.png" alt="Godaddy"></div>
                           <span>Godaddy</span>
                        </div>
                     </div>
                     <div class="column is-2-desktop is-3-tablet is-half-mobile">
                        <div class="email-client-block">
                           <div class="email-client-image-block"><img src="https://cdn.signmyemails.com/images/email_clients/inbox-by-gmail.png" alt="Inbox by Gmail"></div>
                           <span>Inbox by Gmail</span>
                        </div>
                     </div>
                     <div class="column is-2-desktop is-3-tablet is-half-mobile">
                        <div class="email-client-block">
                           <div class="email-client-image-block"><img src="https://cdn.signmyemails.com/images/email_clients/airmail.png" alt="Airmail"></div>
                           <span>Airmail</span>
                        </div>
                     </div>
                     <div class="column is-2-desktop is-3-tablet is-half-mobile">
                        <div class="email-client-block">
                           <div class="email-client-image-block"><img src="https://cdn.signmyemails.com/images/email_clients/spark.png" alt="Spark"></div>
                           <span>Spark</span>
                        </div>
                     </div>
                     <div class="column is-2-desktop is-3-tablet is-half-mobile">
                        <div class="email-client-block">
                           <div class="email-client-image-block"><img src="https://cdn.signmyemails.com/images/email_clients/other.png" alt="Other"></div>
                           <span>Other</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="message is-warning">
               <div class="message-body">
                  <p><span><strong>Note:</strong> Free users must keep the "Email Signature by SignMyEmails" branding.</span> &nbsp;
                     <a class="button is-small is-warning"><span class="icon"><i class="icon-close"></i></span> <span>Remove Branding</span></a>
                  </p>
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
   <div class="modal is-active is-large" style="display: none;">
      <div class="modal-card" style="display: none;">
         <header class="modal-card-head">
            <p class="modal-card-title">Generator Options</p>
            <a class="delete"></a>
         </header>
         <section class="modal-card-body">
            <div class="columns is-desktop">
               <div class="column is-7">
                  <div class="field">
                     <label class="label is-uppercase">Generator Name:</label>
                     <p class="control">
                        <input name="generator_name" type="text" placeholder="Generator Name" class="input">
                     </p>
                  </div>
               </div>
               <div class="column is-5">
                  <div class="picker-input">
                     <div class="field is-marginless">
                        <label class="label">GENERATOR PAGE COLOR:</label>
                        <div class="field-body">
                           <div class="field has-addons">
                              <p class="control"><span class="button" style="border: 1px solid rgb(219, 219, 219); background-color: rgb(250, 250, 250);"><i class="icon" style="border-radius: 2px;"></i></span></p>
                              <p class="control is-expanded">
                                 <input class="input">
                              </p>
                           </div>
                        </div>
                     </div>
                     <!---->
                  </div>
               </div>
            </div>
            <h3 class="title is-6 is-uppercase has-text-weight-bold">Editable Fields:</h3>
            <p class="subtitle is-6 has-text-weight-normal">Select fields which can be changed by your team.</p>
            <div class="generator-editables columns is-multiline is-gapless">
               <div class="column is-12">
                  <h5 class="title is-6 has-text-weight-semibold">Basic</h5>
               </div>
               <div class="column is-3">
                  <label class="checkbox button is-fullwidth has-text-left is-light is-capitalized">
                  <input type="checkbox" name="address" value="address"> address
                  </label>
               </div>
               <div class="column is-3">
                  <label class="checkbox button is-fullwidth has-text-left is-light is-capitalized">
                  <input type="checkbox" name="company" value="company"> company
                  </label>
               </div>
               <div class="column is-3">
                  <label class="checkbox button is-fullwidth has-text-left is-light is-capitalized">
                  <input type="checkbox" name="email" value="email"> email
                  </label>
               </div>
               <div class="column is-3">
                  <label class="checkbox button is-fullwidth has-text-left is-light is-capitalized">
                  <input type="checkbox" name="image" value="image"> image
                  </label>
               </div>
               <div class="column is-3">
                  <label class="checkbox button is-fullwidth has-text-left is-light is-capitalized">
                  <input type="checkbox" name="jobTitle" value="jobTitle"> jobTitle
                  </label>
               </div>
               <div class="column is-3">
                  <label class="checkbox button is-fullwidth has-text-left is-light is-capitalized">
                  <input type="checkbox" name="mobile" value="mobile"> mobile
                  </label>
               </div>
               <div class="column is-3">
                  <label class="checkbox button is-fullwidth has-text-left is-light is-capitalized">
                  <input type="checkbox" name="name" value="name"> name
                  </label>
               </div>
               <div class="column is-3">
                  <label class="checkbox button is-fullwidth has-text-left is-light is-capitalized">
                  <input type="checkbox" name="phone" value="phone"> phone
                  </label>
               </div>
               <div class="column is-3">
                  <label class="checkbox button is-fullwidth has-text-left is-light is-capitalized">
                  <input type="checkbox" name="website" value="website"> website
                  </label>
               </div>
               <div class="column is-3">
                  <label class="checkbox button is-fullwidth has-text-left is-light is-capitalized">
                  <input type="checkbox" name="fax" value="fax"> fax
                  </label>
               </div>
               <!---->
               <div class="column is-3">
                  <label class="checkbox button is-fullwidth has-text-left is-light is-capitalized">
                  <input type="checkbox" name="skype" value="skype"> skype
                  </label>
               </div>
            </div>
            <div class="generator-editables columns is-multiline is-gapless">
               <div class="column is-12">
                  <h5 class="title is-6 has-text-weight-semibold">Social</h5>
               </div>
               <div class="column is-3">
                  <label class="checkbox button is-fullwidth has-text-left is-light is-capitalized">
                  <input type="checkbox" name="linkedin" value="linkedin"> linkedin
                  </label>
               </div>
            </div>
         </section>
         <footer class="modal-card-foot">
            <div class="columns is-gapless is-fullwidth is-mobile">
               <div class="column"></div>
               <div class="column is-narrow">
                  <div class="buttons"><span class="button">Cancel</span> <span class="button is-success"><span class="icon is-small"><i class="icon icon-floppy-o"></i></span> <span>Save Generator</span></span>
                  </div>
               </div>
            </div>
         </footer>
      </div>
   </div>
</div>
   <!-- Custom action hidden field -->
   <input type="hidden" name="action" value="custom_action">
</form>

<script type="text/javascript">
   
   jQuery(document).ready(function($) {
      
      $('[name="save_and_install"]').on('click', function(e) {
         e.preventDefault();

         //var $form = $(this);
         var $form = $('.signature-form');

         $.post($form.attr('action'), $form.serialize(), function(data) {
            alert('This is data returned from the server ' + data);
         }, 'json');
      });

   });

</script>

<?php get_footer(); ?>


