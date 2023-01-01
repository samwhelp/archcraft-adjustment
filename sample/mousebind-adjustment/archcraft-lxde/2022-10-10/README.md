
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

> Drag window to move, when window maximized.


### context Titlebar / orginal

* [config snippet](asset/orginal/lxde-rc.xml#L1063-L1065)

``` xml
  <mouse>
    <context name="Titlebar">
      <mousebind action="Drag" button="Left">
        <action name="Move"/>
      </mousebind>
    </context>
  </mouse>
```

### context Titlebar / adjust

* [config snippet](lxde-rc.xml#L1064-L1067)

``` xml
  <mouse>
    <context name="Titlebar">
      <mousebind action="Drag" button="Left">
        <action name="UnmaximizeFull"/>
        <action name="Move"/>
      </mousebind>
    </context>
  </mouse>
```




### context Frame / orginal

* [config snippet](asset/orginal/lxde-rc.xml#L1025-L1027)

``` xml
  <mouse>
    <context name="Frame">
      <mousebind action="Drag" button="A-Left">
        <action name="Move"/>
      </mousebind>
    </context>
  </mouse>
```

### context Frame / adjust

* [config snippet](lxde-rc.xml#L1025-L1028)

``` xml
  <mouse>
    <context name="Frame">
      <mousebind action="Drag" button="A-Left">
        <action name="UnmaximizeFull"/>
        <action name="Move"/>
      </mousebind>
    </context>
  </mouse>
```
