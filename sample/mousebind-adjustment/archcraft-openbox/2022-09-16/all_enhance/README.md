
# archcraft-openbox

## 2022-09-16

* Releases / [v22.09](https://github.com/archcraft-os/releases/releases/tag/v22.09)

| File |
| --- |
| [archcraft-2022.09.16-x86_64.iso](https://github.com/archcraft-os/releases/releases/download/v22.09/archcraft-2022.09.16-x86_64.iso) |
| [archcraft-2022.09.16-x86_64.iso.sha256sum](https://github.com/archcraft-os/releases/releases/download/v22.09/archcraft-2022.09.16-x86_64.iso.sha256sum) |
| [archcraft-2022.09.16-x86_64.iso.sig](https://github.com/archcraft-os/releases/releases/download/v22.09/archcraft-2022.09.16-x86_64.iso.sig) |


### download.sh

``` sh
wget -c -i download.txt
```

### download.txt

``` txt
https://github.com/archcraft-os/releases/releases/download/v22.09/archcraft-2022.09.16-x86_64.iso
https://github.com/archcraft-os/releases/releases/download/v22.09/archcraft-2022.09.16-x86_64.iso.sha256sum
https://github.com/archcraft-os/releases/releases/download/v22.09/archcraft-2022.09.16-x86_64.iso.sig
```




## archcraft-openbox / adjustment / mousebind / drag_window_to_move_when_window_maximized

> Drag window to move, when window maximized.


### context Titlebar / orginal

* [config snippet](asset/orginal/rc.xml#L797-L799)
* [config snippet](asset/orginal/rc.xml#L804-L820)

``` xml
  <mouse>
    <context name="Titlebar">

      <mousebind action="Drag" button="A-Left">
        <action name="Move"/>
      </mousebind>

      <mousebind action="Drag" button="Left">
        <action name="if">
          <maximizedvertical>yes</maximizedvertical>
          <then>
            <action name="Unmaximize"/>
            <direction>vertical</direction>
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

### context Titlebar / adjust

* [config snippet](rc.xml#L815-L819)
* [config snippet](rc.xml#L824-L839)

``` xml
  <mouse>
    <context name="Titlebar">

      <!--
      <mousebind action="Drag" button="A-Left">
        <action name="Move"/>
      </mousebind>
      //-->

      <mousebind action="Drag" button="Left">
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

* [config snippet](asset/orginal/rc.xml#L780-L782)

``` xml
  <mouse>
    <context name="Frame">
      <mousebind action="Drag" button="W-Left">
        <action name="Move"/>
      </mousebind>
    </context>
  </mouse>
```

### context Frame / adjust

* [config snippet](rc.xml#L780-L800)

``` xml
  <mouse>
    <context name="Frame">
      <!--
      <mousebind action="Drag" button="W-Left">
        <action name="Move"/>
      </mousebind>
      //-->
      <mousebind action="Drag" button="A-Left">
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




## archcraft-openbox / adjustment / mousebind / drag_window_to_move_keep_shaded_when_window_shaded

> Drag window to move, keep shaded, when window shaded.


### context Titlebar Top Right Bottom Left TLCorner TRCorner BRCorner BLCorner / orginal

* [config snippet](asset/orginal/rc.xml#L860-L864)

``` xml
  <mouse>
    <context name="Titlebar Top Right Bottom Left TLCorner TRCorner BRCorner BLCorner">
      <mousebind action="Press" button="Left">
        <action name="Focus"/>
        <action name="Raise"/>
        <action name="Unshade"/>
      </mousebind>
    </context>
  </mouse>
```

### context Titlebar Top Right Bottom Left TLCorner TRCorner BRCorner BLCorner / adjust

* [config snippet](rc.xml#L879-L889)

``` xml
  <mouse>
    <context name="Titlebar Top Right Bottom Left TLCorner TRCorner BRCorner BLCorner">
      <!--
      <mousebind action="Press" button="Left">
        <action name="Focus"/>
        <action name="Raise"/>
        <action name="Unshade"/>
      </mousebind>
      //-->
      <mousebind action="Press" button="Left">
        <action name="Focus"/>
        <action name="Raise"/>
      </mousebind>
    </context>
  </mouse>
```




## archcraft-openbox / adjustment / mousebind / mouse_left_click_on_desktop_to_toggle_show_desktop

> mouse left click on desktop to toggle show desktop


### context Root / orginal

* [config snippet](asset/orginal/rc.xml#L1010-L1026)


### context Root / adjust

* [config snippet](rc.xml#L1036-L1038)

``` xml
  <mouse>
    <context name="Root">
      <mousebind action="Press" button="Left">
        <action name="ToggleShowDesktop"/>
      </mousebind>
    </context>
  </mouse>
```
