<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
  builder:
    label: Projects
    type: builder
    fieldsets:
      aboutImage:
        label: Image (1500 x 2000)
        entry: >
          <img src="{{_fileUrl}}{{image}}" height=200px/>  <div style="width:50%; float:right;"><b>Caption:</b><br/>{{caption}}</div>
        fields:
          image:
            label: Image
            type: select
            options: images
            width: 1/2
          caption:
            label: Caption
            type: text
            width: 1/2
      aboutText:
        label: Text
        entry: >
         {{text}}
        fields:
          text:
            label: Text
            type: textarea