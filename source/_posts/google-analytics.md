---
title: '03 - Google Analytics'
date: 2018-08-31
image: analytics.jpg
comments: false
---
Register the website on [Google Analytics](https://analytics.google.com/analytics/web).

Get your **tracking ID**, go to `config.php` and add your ID under the `services` key.

The master template is designed to only include analytics in production. This is to avoid tracking page views while you are developing the site.
