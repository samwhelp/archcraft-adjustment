---
title: Drag window to move, when window maximized. (enhance)
nav_order: 7011
has_children: false
parent: Howto
---


# Drag window to move, when window maximized. (enhance)



## Case

| Case |
| --- |
| archcraft-lxde / [drag_window_to_move_when_window_maximized_enhance](https://github.com/samwhelp/archcraft-adjustment/tree/main/sample/mousebind-adjustment/archcraft-lxde/2022-10-10/drag_window_to_move_when_window_maximized_enhance) |


## archcraft-lxde / adjustment / mousebind

> Drag window to move, when window maximized.


### context Titlebar / orginal

* [config snippet](https://github.com/samwhelp/archcraft-adjustment/blob/main/sample/mousebind-adjustment/archcraft-lxde/2022-10-10/drag_window_to_move_when_window_maximized_enhance/asset/orginal/lxde-rc.xml#L696-L698)

``` xml
  <mouse>
    <context name="Titlebar">
      <mousebind button="Left" action="Drag">
        <action name="Move"/>
      </mousebind>
    </context>
  </mouse>
```

### context Titlebar / adjust

* [config snippet](https://github.com/samwhelp/archcraft-adjustment/blob/main/sample/mousebind-adjustment/archcraft-lxde/2022-10-10/drag_window_to_move_when_window_maximized_enhance/lxde-rc.xml#L711-L726)

``` xml
  <mouse>
    <context name="Titlebar">
      <mousebind button="Left" action="Drag">
        <action name="if">
          <maximized>yes</maximized>
          <then>
            <action name="UnmaximizeFull"/>
            <action name="MoveResizeTo">
              <x>center</x>
              <y>current</y>
            </action>
            <action name="Move"/>
          </then>
          <else>
            <action name="Move"/>
          </else>
        </action>
      </mousebind>
    </context>
  </mouse>
```




### context Frame / orginal

* [config snippet](https://github.com/samwhelp/archcraft-adjustment/blob/main/sample/mousebind-adjustment/archcraft-lxde/2022-10-10/drag_window_to_move_when_window_maximized_enhance/asset/orginal/lxde-rc.xml#L653-L658)

``` xml
  <mouse>
    <context name="Frame">
      <mousebind button="W-Left" action="Drag">
        <action name="Move"/>
      </mousebind>
      <mousebind button="A-Left" action="Drag">
        <action name="Move"/>
      </mousebind>
    </context>
  </mouse>
```

### context Frame / adjust

* [config snippet](https://github.com/samwhelp/archcraft-adjustment/blob/main/sample/mousebind-adjustment/archcraft-lxde/2022-10-10/drag_window_to_move_when_window_maximized_enhance/lxde-rc.xml#L658-L673)

``` xml
  <mouse>
    <context name="Frame">
      <!--
      <mousebind button="W-Left" action="Drag">
        <action name="UnmaximizeFull"/>
        <action name="Move"/>
      </mousebind>
      //-->
      <mousebind button="A-Left" action="Drag">
        <action name="if">
          <maximized>yes</maximized>
          <then>
            <action name="UnmaximizeFull"/>
            <action name="MoveResizeTo">
              <x>center</x>
              <y>current</y>
            </action>
            <action name="Move"/>
          </then>
          <else>
            <action name="Move"/>
          </else>
        </action>
      </mousebind>
    </context>
  </mouse>
```
