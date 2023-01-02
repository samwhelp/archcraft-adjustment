
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

* [config snippet](rc.xml#L860-L870)

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
