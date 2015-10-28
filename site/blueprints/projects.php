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
      single:
        label: One
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
      double:
        label: Two
        entry: >
          <img src="{{_fileUrl}}{{image1}}" height=200px/>  <div style="width:50%; float:right;"><b>Caption:</b><br/>{{caption1}}</div><br/>
          <img src="{{_fileUrl}}{{image2}}" height=200px/>  <div style="width:50%; float:right;"><b>Caption:</b><br/>{{caption2}}</div>
        fields:
          image1:
            label: Image
            type: select
            options: images
            width: 1/2
          caption1:
            label: Caption
            type: text
            width: 1/2
          image2:
            label: Image
            type: select
            options: images
            width: 1/2
          caption2:
            label: Caption
            type: text
            width: 1/2
      triple:
        label: Three
        entry: >
          <img src="{{_fileUrl}}{{image1}}" height=200px/>  <div style="width:50%; float:right;"><b>Caption:</b><br/>{{caption1}}</div><br/>
          <img src="{{_fileUrl}}{{image2}}" height=200px/>  <div style="width:50%; float:right;"><b>Caption:</b><br/>{{caption2}}</div><br/>
          <img src="{{_fileUrl}}{{image3}}" height=200px/>  <div style="width:50%; float:right;"><b>Caption:</b><br/>{{caption3}}</div>
        fields:
          image1:
            label: Image
            type: select
            options: images
            width: 1/2
          caption1:
            label: Caption
            type: text
            width: 1/2
          image2:
            label: Image
            type: select
            options: images
            width: 1/2
          caption2:
            label: Caption
            type: text
            width: 1/2
          image3:
            label: Image
            type: select
            options: images
            width: 1/2
          caption3:
            label: Caption
            type: text
            width: 1/2

            