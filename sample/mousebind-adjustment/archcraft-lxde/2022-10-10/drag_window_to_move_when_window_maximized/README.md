
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

* [config snippet](lxde-rc.xml#L698-L701)

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

* [config snippet](lxde-rc.xml#L653-L660)

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


## Link

* note-about-openbox / [drag_window_to_move_when_window_maximized](https://github.com/samwhelp/note-about-openbox/tree/gh-pages/_demo/sample/mousebind-adjustment/openbox/3.6.1/drag_window_to_move_when_window_maximized)
