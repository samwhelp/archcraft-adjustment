
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




## archcraft-openbox / adjustment / mousebind

> Mouse middle scroll on titlebar, keep focus, when window shading


### context Titlebar / orginal

* [config snippet](asset/orginal/rc.xml#L824-L843)

``` xml
  <mouse>
    <context name="Titlebar">

      <mousebind action="Click" button="Up">
        <action name="if">
          <shaded>no</shaded>
          <then>
            <action name="Shade"/>
            <action name="FocusToBottom"/>
            <action name="Unfocus"/>
            <action name="Lower"/>
          </then>
        </action>
      </mousebind>
      <mousebind action="Click" button="Down">
        <action name="if">
          <shaded>yes</shaded>
          <then>
            <action name="Unshade"/>
            <action name="Raise"/>
          </then>
        </action>
      </mousebind>

    </context>
  </mouse>
```


### context Titlebar / adjust

* [config snippet](rc.xml#L824-L845)

``` xml
  <mouse>
    <context name="Titlebar">

      <mousebind action="Click" button="Up">
        <action name="if">
          <shaded>no</shaded>
          <then>
            <action name="Shade"/>
            <!--
            <action name="FocusToBottom"/>
            <action name="Unfocus"/>
            <action name="Lower"/>
            //-->
          </then>
        </action>
      </mousebind>
      <mousebind action="Click" button="Down">
        <action name="if">
          <shaded>yes</shaded>
          <then>
            <action name="Unshade"/>
            <action name="Raise"/>
          </then>
        </action>
      </mousebind>

    </context>
  </mouse>
```

## Link

* note-about-openbox / [mouse_middle_scroll_on_titlebar_keep_focus_when_window_shading](https://github.com/samwhelp/note-about-openbox/tree/gh-pages/_demo/sample/mousebind-adjustment/openbox/3.6.1/mouse_middle_scroll_on_titlebar_keep_focus_when_window_shading)
* archcraft-openbox / [[Adjustment] Mouse middle scroll on titlebar, keep focus, when window shading](https://github.com/archcraft-os/archcraft-openbox/issues/12)
