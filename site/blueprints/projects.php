<?php if(!defined('KIRBY')) exit ?>

title: Projects
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
      full:
        label: Full
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
      half:
        label: Half
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
      third:
        label: Third
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