
# archcraft-lxde / adjustment

## 2022-10-10

* Releases / [v22.10](https://github.com/archcraft-os/archcraft-lxde/releases/tag/v22.10)

| File |
| --- |
| [archcraft-lxde-2022.10.10-x86_64.iso](https://github.com/archcraft-os/archcraft-lxde/releases/download/v22.10/archcraft-lxde-2022.10.10-x86_64.iso) |
| [archcraft-lxde-2022.10.10-x86_64.iso.sha256sum](https://github.com/archcraft-os/archcraft-lxde/releases/download/v22.10/archcraft-lxde-2022.10.10-x86_64.iso.sha256sum) |
| [archcraft-lxde-2022.10.10-x86_64.iso.sig](https://github.com/archcraft-os/archcraft-lxde/releases/download/v22.10/archcraft-lxde-2022.10.10-x86_64.iso.sig) |


### download.sh

``` sh
wget -c -i download.txt
```

### download.txt

``` txt
https://github.com/archcraft-os/archcraft-lxde/releases/download/v22.10/archcraft-lxde-2022.10.10-x86_64.iso
https://github.com/archcraft-os/archcraft-lxde/releases/download/v22.10/archcraft-lxde-2022.10.10-x86_64.iso.sha256sum
https://github.com/archcraft-os/archcraft-lxde/releases/download/v22.10/archcraft-lxde-2022.10.10-x86_64.iso.sig
```




## archcraft-lxde / adjustment / mousebind / drag_window_to_move_when_window_maximized

> Drag window to move, when window maximized.


### context Titlebar / orginal

* [config snippet](asset/orginal/lxde-rc.xml#L696-L698)

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

* [config snippet](lxde-rc.xml#L711-L726)

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

* [config snippet](asset/orginal/lxde-rc.xml#L653-L658)

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

* [config snippet](lxde-rc.xml#L658-L673)

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




## archcraft-lxde / adjustment / mousebind / mouse_middle_scroll_on_titlebar_keep_focus_when_window_shading

> Mouse middle scroll on titlebar, keep focus, when window shading


### context Titlebar / orginal

* [config snippet](asset/orginal/lxde-rc.xml#L707-L716)

``` xml
  <mouse>
    <context name="Titlebar">

      <mousebind button="Up" action="Click">
        <action name="Shade"/>
        <action name="FocusToBottom"/>
        <action name="Unfocus"/>
        <action name="Lower"/>
      </mousebind>
      <mousebind button="Down" action="Click">
        <action name="Unshade"/>
        <action name="Raise"/>
      </mousebind>

    </context>
  </mouse>
```


### context Titlebar / adjust

* [config snippet](lxde-rc.xml#L735-L746)

``` xml
  <mouse>
    <context name="Titlebar">

      <mousebind button="Up" action="Click">
        <action name="Shade"/>
        <!--
        <action name="FocusToBottom"/>
        <action name="Unfocus"/>
        <action name="Lower"/>
        //-->
      </mousebind>
      <mousebind button="Down" action="Click">
        <action name="Unshade"/>
        <action name="Raise"/>
      </mousebind>

    </context>
  </mouse>
```
