---
title: Drag window to move, when window maximized.
nav_order: 7010
has_children: false
parent: Howto
---


# Drag window to move, when window maximized.



## Case

| Case |
| --- |
| archcraft-lxde / [drag_window_to_move_when_window_maximized](https://github.com/samwhelp/archcraft-adjustment/tree/main/sample/mousebind-adjustment/archcraft-lxde/2022-10-10/drag_window_to_move_when_window_maximized) |


## archcraft-lxde / adjustment / mousebind

> Drag window to move, when window maximized.


### context Titlebar / orginal

* [config snippet](https://github.com/samwhelp/archcraft-adjustment/blob/main/sample/mousebind-adjustment/archcraft-lxde/2022-10-10/drag_window_to_move_when_window_maximized/asset/orginal/lxde-rc.xml#L696-L698)

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

* [config snippet](https://github.com/samwhelp/archcraft-adjustment/blob/main/sample/mousebind-adjustment/archcraft-lxde/2022-10-10/drag_window_to_move_when_window_maximized/lxde-rc.xml#L698-L701)

``` xml
  <mouse>
    <context name="Titlebar">
      <mousebind button="Left" action="Drag">
        <action name="UnmaximizeFull"/>
        <action name="Move"/>
      </mousebind>
    </context>
  </mouse>
```




### context Frame / orginal

* [config snippet](https://github.com/samwhelp/archcraft-adjustment/blob/main/sample/mousebind-adjustment/archcraft-lxde/2022-10-10/drag_window_to_move_when_window_maximized/asset/orginal/lxde-rc.xml#L653-L658)

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

* [config snippet](https://github.com/samwhelp/archcraft-adjustment/blob/main/sample/mousebind-adjustment/archcraft-lxde/2022-10-10/drag_window_to_move_when_window_maximized/lxde-rc.xml#L653-L660)

``` xml
  <mouse>
    <context name="Frame">
      <mousebind button="W-Left" action="Drag">
        <action name="UnmaximizeFull"/>
        <action name="Move"/>
      </mousebind>
      <mousebind button="A-Left" action="Drag">
        <action name="UnmaximizeFull"/>
        <action name="Move"/>
      </mousebind>
    </context>
  </mouse>
```
