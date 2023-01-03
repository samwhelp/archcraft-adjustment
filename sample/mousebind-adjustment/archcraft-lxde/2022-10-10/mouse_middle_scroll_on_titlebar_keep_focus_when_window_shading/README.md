
# archcraft-lxde

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


## archcraft-lxde / adjustment / mousebind

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

* [config snippet](lxde-rc.xml#L707-L718)

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
