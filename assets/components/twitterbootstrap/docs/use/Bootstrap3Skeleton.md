#Bootstrap3Skeleton Template#

This file should always be duplicated for use as it will be overwritten during updates to the TwitterBootstrapForMODX Package.

##Intended Use:##
- To serve as the primary template to build subsequent templates for Articles, Collections, Galleries, Portfolios, etc.
- As is, the file will function for any default Twitter Bootstrap 3 installation as it installs the necessary files and requires only navigation tweaks.

The skeleton file uses multiple Chunks to provide the necessary components for the page structure. These have been seperated so they can be reused multiple times as needed while allowing replacement Chunks dedicated to the specified application to be used.

For example, blogs have tags and other functionality an image gallery may or may not use. By duplicating the Bootstrap3Skeleton Template into a BlogContainer and again into a BlogItem, Articles or Collections can be standardized across the site and even seubsequent sites.

Unlike other Packages in the repository, I decided to keep things as straight-forward as possible, while leaving full control in the hands of the site development team. As such, the Bootstrap3Skeleton Template only contains those elements which are required to build pages and additional tempaltes.

##Runtime Configuration:##
The following are the actual calls used on my personal website.
```
[[$SEO-META?
	&fb_app_id=`217198328466783`
	&fb_admins=`10205993442506334`
	&googleid=`UA-11306908-1`
	&twitter_creator=`@shawnwilkerson`
	&twitter_site_logo=`shawn-wilkerson.jpg`
	&twitter_site=`@shawnwilkerson`
	&site_logo=`shawn-wilkerson.jpg`]]

[[$CDN-Header?
	&cdn=`cloudflare`
	&bootstrapVersion=`3.3.4`
	&useDefaultTheme=`1`]]

[[$FontAwesome4?cdn=`cloudflare`]] - Found in the FontAwesomeForMODX Package

[[$siteHeader]]

[[$CDN-Shiv:strip?cdn=`cloudflare`]]

[[$CDN-Footer:strip?cdn=`cloudflare`]]

[[$sitefooter]]

[[$CDN-Shiv:strip?cdn=`cloudflare`]]
```

Note the positioning of the Chunk calls within the Bootstrap3Skeleton Template.

The siteHeader and siteFooter positions allow for page specific Javascript and Cascading Style Sheets.

##Comments:##
For the typical site, I would suggest the following steps:

1) Duplicate Bootstrap3Skeleton Template to a new Template or replace the contents of the BaseTemplate - provided in all new installs.

2) Create Chunks named whatever you like with static links to the cChunks found in /assets/components/twitterbootstrap/elements/chunks.
	This will allow the Chunks of the filesystems to be updated to new Bootstrap versions within the same major family (example all Bootsrap 3 releases) without overwritting the Chunks in the Manager.
	It also reduces the number of entires in the Elements tree.

3) Complete all of the placeholders as necessary, select versions where applicable. I would suggest leaving versions off wherever possible to stay current with new releases by the Vendor.

##Version Disclaimer:##
The files listed in the Package are tied to a specific Bootstrap major version. As subsequent versions (i.g. Bootstrap 4) are released, additional files will be added to the Package.

