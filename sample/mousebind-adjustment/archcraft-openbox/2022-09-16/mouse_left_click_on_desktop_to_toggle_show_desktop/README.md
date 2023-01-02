
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

> Mouse left click on desktop to toggle show desktop


### context Root / orginal

* [config snippet](asset/orginal/rc.xml#L1010-L1026)


### context Root / adjust

* [config snippet](rc.xml#L1011-L1013)

``` xml
  <mouse>
    <context name="Root">
      <mousebind action="Press" button="Left">
        <action name="ToggleShowDesktop"/>
      </mousebind>
    </context>
  </mouse>
```


## Link

* note-about-openbox / [mouse_left_click_on_desktop_to_toggle_show_desktop](https://github.com/samwhelp/note-about-openbox/tree/gh-pages/_demo/sample/mousebind-adjustment/openbox/3.6.1/mouse_left_click_on_desktop_to_toggle_show_desktop)
