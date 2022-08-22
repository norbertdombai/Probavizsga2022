class Feladat{
    constructor(node, adat){
        this.node=node;
        this.adat=adat;
        this.szakdoga_nev=this.node.children(".szakdoga_nev");
        this.tagokneve=this.node.children(".tagokneve");
        this.githublink=this.node.children(".githublink");
        this.oldallink=this.node.children(".oldallink");
        this.setAdat(this.adat);
    }

    setAdat(adat){
        this.adat=adat;
        this.szakdoga_nev.text(adat.szakdoga_nev);
        this.tagokneve.text(adat.tagokneve);
        this.githublink.text(adat.githublink);
        this.oldallink.text(adat.oldallink);
    }
}

