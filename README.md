#Sanity Bootstrap for MODX (Revolution)#

This is the main Git repository for using the Sanity LLC  Bootstrap with MODX Revolution.

@SanityLLC/developers

##Features##
**Rapid deployment of web sites using Wayfinder and Quickcrumbs or pdoCrumbs, pdoResources, and pdoMenu.**

This MODX contribution allows the user to rapidly deploy Bootstrap sites by providing selectable CDNs and a drop in standard template which can be rapidly  customized for use with Packages, layouts, and dedicated application front-ends.

We tried to take the simplest route to provide maximum extensibility and ease of use. The publisher can select MaxCDN/Bootstrap, CloudFlare, or local storage (default). Additionally, a seperate header and footer file has been included which can be used to implement site specific content.
The default template will attempt to load the Bootstrap 3 and FontAwesome files from the local filesystem, unless otherwise specified at runtime. Versions can also be designated in the Template at the `CDN-Header` and `CDN-Footer` chunk calls. A local fallback route has been implemented to ensure the necessary CSS and JavaScript is loaded if a CDN fails for whatever reason. If a version is not specified the defaults will be used.

##Facebook, OpenGraph, Twitter Card and Google Analytics##
 OpenGraph and  card entries are automatically created for each page using the Resource `pagetitle`, `createdby`, `publishedon`, `description` and other attributes. To function as intended the `SEO-MetaDeclarations` call requires Google Analytics ID, fb:app_id and/or fb:admins, :creator, and :site entries to be populated.
```
Page Map
 Template
   HEAD
     SEO-MetaDeclarations
     CDN-Header
     site-Header
     FontAwesome
     CDN-Shiv
   BODY
     Content
   FOOTER
     CDN-Footer
     site-Footer
```

##Using the Package##
It is highly suggested for users to duplicate the provided Manager-based templates and chunks before use, as any updates to the Package will overwrite existing elements.

##CDN-Footer##
Loads the required JavaScript for Bootstrap.
```
@property string cdn The repository to use: bootstrap, maxcdn, cloudflare, local

@property string bootstrapVersion The version of bootstrap to load and should match CDN-Header. Defaults to 3.3.4.
```

##CDN-Header##
Loads Bootstrap and optionally its default template. Use the siteHeader chunk for dedicated templates which require Bootstrap to be loaded first.
```
@property string cdn The repository to use: bootstrap, maxcdn, cloudflare, local

@property string bootstrapVersion The version of bootstrap to load. Defaults to 3.3.4.
```

##CDN-Shiv##
Loads html5shiv.min.js and respond.min.js.
```
@property string cdn The repository to use: bootstrap, maxcdn, cloudflare, local.
```

##SEO-MetaDeclarations##
Traditional, Facebook, OpenGraph, Twitter Card meta entries. Note:  requires the page title to be limited to 70 characters and the description to 200 characters. These will be adjusted automatically.
```
@property string fb_app_id Instructions: https://help.yahoo.com/kb/yahoo-merchant-solutions/facebook-application-sln18861.html

@property string fb_admins Go to http://graph.facebook.com/YOUR-FACEBOOK-USERNAME The first line should be your id. Instructions: https://help.yahoo.com/kb/yahoo-merchant-solutions/facebook-application-sln18861.html

@property string googleid The Google Id can be created by adding the site to your Google Analytics account http://www.google.com/analytics Format: UA-11306908-1

@property string site_logo The file name of the image to be shown in Facebook Posts, Goolge Plus, LinkedIn, etc. The path will always be the site's site_url/assets/images/ directory. Image size should be 200x200 at a minimum.

@property string _creator @username of content creator Reference: https://dev..com/cards/markup Example: @shawnwilkerson

@property string _site The @username the card should be attributed to. For a company site use a company  account (i.g. @SanityLLC), otherwise use the user's  account.

@property string _site_logo The file name of the image to be shown in Tweets. The path will always be the site's assets_url/images
```

##Subpackages##
We have chosen to use some of the most popular packages available to MODX Revolution. This is for two purposes, to expedite users new to the platform getting sites from production to live and to provide working examples of each. The following Packages will automatically be downloaded and installed for use with the Template: You may choose the pdoTools setup which does not require anything else, or the Wayfinder / Quickcrumbs version.
```
  FontAwesome - Provides an automated means to load FontAwesome.
  ObfuscateEmail-Revo - Automatically translates all email addresses displayed or linked on the site.
  Quick Crumbs - Provides simple bread crumb functionality.
  PdoTools - Provides Navigation, Breadcrumb, and fast access to resource and user information.
  Wayfinder - Provides Navigation.
```
##Intended Use##
The intention of this repository and subsequent MODX Revolution Package is to provide a single install setup which can be modified on the fly by those individual’s desiring to do so. It is not intended to necessarily have many updates.
The only files which should ever be edited are the Bootstrap3 Template, and the `siteHeader` and `siteFooter` Chunks.

##Unintended Use##
The author does not intend to release updates every time a subpackage is updated. You are free to update those as necessary.

##Requirements##
1. Facebook, OpenGraph,  Card and Google Analytics require the entry of designated attributes to fully benefit from indexing. If a required attribute is not specified the respective line will not be included in the output from `SEO-declarations`.
2. The site logo which will be used with OpenGraph and  Card must be stored in /assets/images and specified in `SEO-MetaDeclarations` using the `&site_logo` and `&_site_logo` parameters.

##Suggestions##
Users should modify the `siteHeader` and `siteFooter` to correctly link to site CSS and JavaScript Files to be included after Bootstrap 3 and FontAwesome 4. Also, imported Google Fonts should be designated in `siteHeader`.

##Non-destructive Disclaimer and Collision Warning##
The Subsequent package does not require the site to be empty to be used and will not destroy, reset, or otherwise alter preexisting content. It will, however, overwrite itself during updates. Please duplicate components before use.

##Additional Documentation##
For specific installation instructions see the docs/use folder.
