$wnd.jsme.runAsyncCallback1('var v7="Assignment of aromatic double bonds failed";function w7(a,b){var c;c=a.A[b];return 3<=c&&4>=c||11<=c&&13>=c||19<=c&&31>=c||37<=c&&51>=c||55<=c&&84>=c||87<=c&&103>=c}function Z(a,b){var c,d;c=b;for(d=0;0!=b;)0==a.c&&(a.e=(a.a[++a.d]&63)<<11,a.c=6),d|=(65536&a.e)>>16-c+b,a.e<<=1,--b,--a.c;return d}function x7(a,b,c){a.c=6;a.d=c;a.a=b;a.e=(b[a.d]&63)<<11}function y7(a,b){var c,d;c=~~(b/2);(d=a>=c)&&(a-=c);c=~~(b/32)*a/(c-a);return d?-c:c}function z7(){this.b=!0}y(24,1,{},z7);_.a=null;_.b=!1;\n_.c=0;_.d=0;_.e=0;_.f=null;function A7(a,b){var c,d,e;1==a.b.E[b]&&oo(a.b,b,2);for(d=0;2>d;++d){c=D(a.b,d,b);yr(a.b,c,!1);for(e=0;e<a.b.f[c];++e)a.a[qo(a.b,c,e)]=!1}}function B7(a){var b,c,d,e,f,g,h;do{h=!1;for(c=0;c<a.b.d;++c)if(a.a[c]){f=!1;for(e=0;2>e;++e){b=!1;d=D(a.b,e,c);for(g=0;g<a.b.f[d];++g)if(c!=qo(a.b,d,g)&&a.a[qo(a.b,d,g)]){b=!0;break}if(!b){f=!0;break}}f&&(h=!0,A7(a,c))}}while(h)}function C7(){}y(29,1,{},C7);_.a=null;_.b=null;\nfunction D7(a,b,c,d){a.b||(4==a.i||3==a.i&&-1!=a.c?a.b=!0:(a.j[a.i]=d,a.f[a.i]=b,a.k[a.i]=c,++a.i))}\nfunction E7(a,b){var c,d,e,f;if(a.b)return 3;-1!=a.c&&(a.c=b[a.c]);for(e=0;e<a.i;++e)2147483647!=a.f[e]&&(a.f[e]=b[a.f[e]]);if(-1==a.c&&0==a.d){d=2147483647;f=-1;for(e=0;e<a.i;++e)d>a.k[e]&&(d=a.k[e],f=e);a.c=a.f[f];for(e=f+1;e<a.i;++e)a.f[e-1]=a.f[e],a.k[e-1]=a.k[e],a.j[e-1]=a.j[e];--a.i}f=(-1==a.c?0:1)+a.d+a.i;if(4<f||3>f)return 3;c=-1==a.c&&1==a.d||-1!=a.c&&Tr(a.n.b,a.c);d=-1;for(e=0;e<a.i;++e)if(a.j[e]){if(-1!=d||c)return 3;d=e}f=!1;if(-1!=d)for(e=0;e<a.i;++e)!a.j[e]&&a.f[d]<a.f[e]&&(f=!f);d=\n!1;if(-1!=a.c&&!c)for(e=0;e<a.i;++e)a.c<a.f[e]&&(d=!d);e=a.f;c=a.k;var g,h,j;h=!1;for(g=1;g<a.i;++g)for(j=0;j<g;++j)e[j]>e[g]&&(h=!h),c[j]>c[g]&&(h=!h);return a.e^h^d^f?2:1}function F7(a,b,c,d,e,f){this.n=a;0!=d&&1!=d?this.b=!0:(this.a=b,this.c=c,this.d=d,this.e=f,this.i=0,this.j=C(no,dn,-1,4,2),this.f=C(B,w,-1,4,1),this.k=C(B,w,-1,4,1),-1!=c&&1==d&&(D7(this,2147483647,e,!0),this.d=0))}y(30,1,{},F7);_.a=0;_.b=!1;_.c=0;_.d=0;_.e=!1;_.f=null;_.i=0;_.j=null;_.k=null;_.n=null;\nfunction G7(a){mo(a,15);if(a.b){var a=a.b,b;for(b=0;b<a.K.c;++b)if(0==(a.K.s[b]&67108864)&&3==a.V[b]){var c=a.K;c.s[b]|=67108864;c.N&=3}for(b=0;b<a.K.d;++b)3==a.k[b]&&2==uo(a.K,b)&&oo(a.K,b,26)}}function H7(){this.e=1}y(33,1,{},H7);\nfunction I7(a){var b;if(null==a||0==a.length||0==ss(a).length)return pY(new XN,m,!0);b=new Gs;var c=new C7,d=iV(ss(a)),e,f,g,h,j,l,n,q,r,u,x,v,t,F,G,s,O,ea,V,$,oa,Ga,Cb,pb,R,Qa,Hb,T,Ba,ia,ja,kb,P,Wc,Ha,nc,xc;c.b=b;hr(c.b);Cb=null;h=C(B,w,-1,64,1);h[0]=-1;Qa=C(B,w,-1,64,1);Hb=C(B,w,-1,64,1);for(t=0;64>t;++t)Qa[t]=-1;f=R=0;T=pb=ia=!1;l=0;Ba=d.length;for(j=1;32>=d[R];)++R;for(;R<Ba;)if(ja=d[R++]&65535,J7(ja)||42==ja){g=0;x=-1;F=Ga=G=!1;if(ia)82==ja&&XM(d[R]&65535)?(ea=null!=String.fromCharCode(d[R+1]&\n65535).match(/\\d/)?2:1,g=Kr(ir(d,R-1,1+ea)),R+=ea):(s=String.fromCharCode(d[R]&65535).toLowerCase().charCodeAt(0)==(d[R]&65535)&&J7(d[R]&65535)?2:1,g=Kr(ir(d,R-1,s)),R+=s-1,x=0),64==d[R]&&(++R,64==d[R]&&(F=!0,++R),Ga=!0),72==d[R]&&(++R,x=1,XM(d[R]&65535)&&(x=d[R]-48,++R));else if(42==ja)g=6,G=!0;else switch(String.fromCharCode(ja).toUpperCase().charCodeAt(0)){case 66:R<Ba&&114==d[R]?(g=35,++R):g=5;break;case 67:R<Ba&&108==d[R]?(g=17,++R):g=6;break;case 70:g=9;break;case 73:g=53;break;case 78:g=7;\nbreak;case 79:g=8;break;case 80:g=15;break;case 83:g=16}if(0==g)throw new op("SmilesParser: unknown element label found");e=cr(c.b,g);G?(T=!0,Br(c.b,e,1)):yr(c.b,e,String.fromCharCode(ja).toLowerCase().charCodeAt(0)==ja&&J7(ja));if(-1!=x&&1!=g){n=C(Pp,Dn,-1,1,1);n[0]=x<<24>>24;var Ja=c.b,ab=e,Ka=n;null!=Ka&&0==Ka.length&&(Ka=null);null==Ka?null!=Ja.r&&(Ja.r[ab]=null):(null==Ja.r&&(Ja.r=C(ar,o,3,Ja.J,0)),Ja.r[ab]=Ka)}v=h[l];-1!=h[l]&&128!=j&&gr(c.b,e,h[l],j);j=1;h[l]=e;0!=f&&(zr(c.b,e,f),f=0);($=!Cb?\nnull:is(Cb,BQ(v)))&&D7($,e,R,1==g);Ga&&(!Cb&&(Cb=new As),Bs(Cb,BQ(e),new F7(c,e,v,x,R,F)))}else if(46==ja)j=128;else if(61==ja)j=2;else if(35==ja)j=4;else if(XM(ja))if(V=ja-48,ia){for(;R<Ba&&XM(d[R]&65535);)V=10*V+d[R]-48,++R;f=V}else{pb&&R<Ba&&XM(d[R]&65535)&&(V=10*V+d[R]-48,++R);pb=!1;if(64<=V)throw new op("SmilesParser: ringClosureAtom number out of range");if(-1==Qa[V])Qa[V]=h[l],Hb[V]=R-1;else{if(Qa[V]==h[l])throw new op("SmilesParser: ring closure to same atom");Cb&&(($=is(Cb,BQ(Qa[V])))&&D7($,\nh[l],Hb[V],!1),($=is(Cb,BQ(h[l])))&&D7($,Qa[V],R-1,!1));gr(c.b,h[l],Qa[V],j);Qa[V]=-1}j=1}else if(43==ja){if(!ia)throw new op("SmilesParser: \'+\' found outside brackets");for(q=1;43==d[R];)++q,++R;1==q&&XM(d[R]&65535)&&(q=d[R]-48,++R);sr(c.b,h[l],q)}else if(45==ja){if(ia){for(q=-1;45==d[R];)--q,++R;-1==q&&XM(d[R]&65535)&&(q=48-d[R],++R);sr(c.b,h[l],q)}}else if(40==ja){if(-1==h[l])throw new op("Smiles with leading parenthesis are not supported");h[l+1]=h[l];++l}else if(41==ja)--l;else if(91==ja){if(ia)throw new op("SmilesParser: nested square brackets found");\nia=!0}else if(93==ja){if(!ia)throw new op("SmilesParser: closing bracket without opening one");ia=!1}else if(37==ja)pb=!0;else if(58==ja)if(ia){for(O=0;XM(d[R]&65535);)O=10*O+d[R]-48,++R;c.b.u[h[l]]=O}else j=64;else if(47==ja)j=17;else if(92==ja)j=9;else throw new op("SmilesParser: unexpected character found: \'"+String.fromCharCode(ja)+Lb);if(1!=j)throw new op("SmilesParser: dangling open bond");for(t=0;64>t;++t)if(-1!=Qa[t])throw new op("SmilesParser: dangling ring closure");var jb=c.b,Ia,da,lb,\nDa,U,$b;$b=C(B,w,-1,jb.o,1);Da=C(no,dn,-1,jb.o,2);for(da=0;da<jb.p;++da)for(lb=0;2>lb;++lb)Tr(jb,jb.B[lb][da])&&!Tr(jb,jb.B[1-lb][da])&&(Da[jb.B[lb][da]]=!0);for(U=jb.o-1;0<=U&&Da[U];)$b[U]=U,--U;for(Ia=0;Ia<=U;++Ia)if(Da[Ia]){$b[Ia]=U;$b[U]=Ia;for(--U;0<=U&&Da[U];)$b[U]=U,--U}else $b[Ia]=Ia;c.b.M=!0;mo(c.b,1);for(e=0;e<c.b.o;++e)if(null!=(null==b.r?null:null==b.r[e]?null:ir(b.r[e],0,b.r[e].length))&&!pr(c.b,e))if(u=(null==c.b.r?null:c.b.r[e])[0],c.b.A[e]<(kp(),$q).length&&null!=$q[c.b.A[e]]){r=!1;\nkb=Wp(c.b,e);kb-=Yp(c.b,e,kb);for(Wc=$q[c.b.A[e]],Ha=0,nc=Wc.length;Ha<nc;++Ha)if(P=Wc[Ha],kb<=P){r=!0;P!=kb+u&&rr(c.b,e,kb+u);break}r||rr(c.b,e,kb+u)}var X,S,Xb,Ib;for(X=0;X<c.b.c;++X)if(7==c.b.A[X]&&0==c.b.q[X]&&3<Wp(c.b,X)&&0<c.b.k[X])for(Ib=0;Ib<c.b.f[X];++Ib)if(S=ro(c.b,X,Ib),Xb=qo(c.b,X,Ib),1<uo(c.b,Xb)&&Mr(c.b.A[S])){4==c.b.E[Xb]?oo(c.b,Xb,2):oo(c.b,Xb,1);sr(c.b,X,c.b.q[X]+1);sr(c.b,S,c.b.q[S]-1);break}var md,td,ka,Pb,qc,sa,L,za,gd,Xc,ie,Yc,Ea,mb,fb,Db;mo(c.b,1);c.a=C(no,dn,-1,c.b.d,2);for(ka=\n0;ka<c.b.d;++ka)64==c.b.E[ka]&&(oo(c.b,ka,1),c.a[ka]=!0);Db=new po(c.b,3);za=C(no,dn,-1,Db.i.c,2);for(Ea=0;Ea<Db.i.c;++Ea){mb=xo(Db.i,Ea);za[Ea]=!0;for(L=0;L<mb.length;++L)if(!pr(c.b,mb[L])){za[Ea]=!1;break}if(za[Ea]){fb=xo(Db.j,Ea);for(L=0;L<fb.length;++L)c.a[fb[L]]=!0}}for(ka=0;ka<c.b.d;++ka)if(!c.a[ka]&&0!=Db.b[ka]&&pr(c.b,D(c.b,0,ka))&&pr(c.b,D(c.b,1,ka)))a:{var ac=c,Qc=ka,yc=void 0,J=void 0,Tb=void 0,wb=void 0,Fc=void 0,nb=void 0,bc=void 0,ic=void 0,Ub=void 0,hd=void 0,nd=void 0,pa=void 0,Vb=\nvoid 0,ic=C(B,w,-1,ac.b.c,1),nb=C(B,w,-1,ac.b.c,1),bc=C(B,w,-1,ac.b.c,1),Ub=C(B,w,-1,ac.b.c,1),yc=D(ac.b,0,Qc),J=D(ac.b,1,Qc);nb[0]=yc;nb[1]=J;bc[0]=-1;bc[1]=Qc;ic[yc]=1;ic[J]=2;Ub[yc]=-1;Ub[J]=yc;for(hd=Fc=1;Fc<=hd&&15>ic[nb[Fc]];){Vb=nb[Fc];for(nd=0;nd<ac.b.f[Vb];++nd)if(Tb=ro(ac.b,Vb,nd),Tb!=Ub[Vb]){wb=qo(ac.b,Vb,nd);if(Tb==yc){bc[0]=wb;for(pa=0;pa<=hd;++pa)ac.a[bc[nd]]=!0;break a}pr(ac.b,Tb)&&0==ic[Tb]&&(++hd,nb[hd]=Tb,bc[hd]=wb,ic[Tb]=ic[Vb]+1,Ub[Tb]=Vb)}++Fc}}mo(c.b,3);for(Ea=0;Ea<Db.i.c;++Ea)if(za[Ea]){mb=\nxo(Db.i,Ea);for(L=0;L<mb.length;++L){var od;var Qb=c,ub=mb[L],Xa=void 0;16==Qb.b.A[ub]&&0>=Qb.b.q[ub]||6==Qb.b.A[ub]&&0!=Qb.b.q[ub]||!pr(Qb.b,ub)?od=!1:(Xa=null==dq(Qb.b,ub)?0:(null==Qb.b.r?null:Qb.b.r[ub])[0],od=1>nr(Qb.b,ub)-Wp(Qb.b,ub)-Xa||5!=Qb.b.A[ub]&&6!=Qb.b.A[ub]&&7!=Qb.b.A[ub]&&8!=Qb.b.A[ub]&&15!=Qb.b.A[ub]&&16!=Qb.b.A[ub]&&33!=Qb.b.A[ub]&&34!=Qb.b.A[ub]?!1:!0);if(!od){yr(c.b,mb[L],!1);for(Xc=0;Xc<c.b.f[mb[L]];++Xc)c.a[qo(c.b,mb[L],Xc)]=!1}}}B7(c);for(Ea=0;Ea<Db.i.c;++Ea)if(za[Ea]&&6==xo(Db.j,\nEa).length){fb=xo(Db.j,Ea);gd=!0;for(Pb=0,qc=fb.length;Pb<qc;++Pb)if(ka=fb[Pb],!c.a[ka]){gd=!1;break}gd&&(A7(c,fb[0]),A7(c,fb[2]),A7(c,fb[4]),B7(c))}for(Yc=5;4<=Yc;--Yc){do{ie=!1;for(ka=0;ka<c.b.d;++ka)if(c.a[ka]){for(L=md=0;2>L;++L){sa=D(c.b,L,ka);for(Xc=0;Xc<c.b.f[sa];++Xc)c.a[qo(c.b,sa,Xc)]&&++md}if(md==Yc){A7(c,ka);B7(c);ie=!0;break}}}while(ie)}for(ka=0;ka<c.b.d;++ka)if(c.a[ka])throw new op(v7);for(td=0;td<c.b.c;++td)if(pr(c.b,td))throw new op(v7);c.b.r=null;c.b.M=!1;var Gc,vb,Yb,Ya,Vd,ud,jc,\nvd,Id,Sa,cc;mo(c.b,3);Id=!1;Sa=C(B,w,-1,2,1);cc=C(B,w,-1,2,1);vd=C(B,w,-1,2,1);for(vb=0;vb<c.b.d;++vb)if(!$o(c.b,vb)&&2==c.b.E[vb]){for(Ya=0;2>Ya;++Ya){Sa[Ya]=-1;vd[Ya]=-1;Gc=D(c.b,Ya,vb);for(jc=0;jc<c.b.f[Gc];++jc)Yb=qo(c.b,Gc,jc),Yb!=vb&&(17==c.b.E[Yb]||9==c.b.E[Yb]?(Sa[Ya]=ro(c.b,Gc,jc),cc[Ya]=Yb):vd[Ya]=ro(c.b,Gc,jc));if(-1==Sa[Ya])break}if(-1!=Sa[0]&&-1!=Sa[1]){ud=c.b.E[cc[0]]!=c.b.E[cc[1]];Vd=!1;for(Ya=0;2>Ya;++Ya)-1!=vd[Ya]&&vd[Ya]<Sa[Ya]&&(Vd=!Vd);Gr(c.b,vb,ud^Vd?2:1,!1);Id=!0}}for(vb=0;vb<\nc.b.d;++vb)(17==c.b.E[vb]||9==c.b.E[vb])&&oo(c.b,vb,1);Id&&(c.b.N|=4);at(new H7,c.b);if(Cb){for(oa=K7((xc=new kW(Cb),new L7(Cb,xc)));EV(oa.a.a);)$=(oa.a.b=wq(oa.a.a)).Ri(),Ar(c.b,$.a,E7($,$b),!1);c.b.N|=4}Ur(c.b);G7(c.b);T&&Ir(c.b,!0);return(new cs(b)).a.a.a}function J7(a){return null!=String.fromCharCode(a).match(/[A-Z]/i)}function K7(a){a=new nW(a.b.a);return new M7(a)}function L7(a,b){this.a=a;this.b=b}y(672,660,{},L7);\n_.Oi=function(a){a:{var b,c;for(c=new nW((new kW(this.a)).a);EV(c.a);)if(b=c.b=wq(c.a),b=b.Ri(),null==a?null==b:Hw(a,b)){a=!0;break a}a=!1}return a};_.ff=function(){return K7(this)};_.Ag=function(){return this.b.a.c};_.a=null;_.b=null;function M7(a){this.a=a}y(673,1,{},M7);_.Ge=function(){return EV(this.a.a)};_.He=function(){return(this.a.b=wq(this.a.a)).Ri()};_.Ie=function(){mW(this.a)};_.a=null;function N7(){SV();this.a=6122;this.b=12230397}y(689,1,{},N7);y(739,632,Gn);\n_.ge=function(){var a,b,c,d,e;a=b=d=null;if(this.b.a==(LQ(),MQ)&&this.b.i==(NQ(),OQ))try{var f=this.b.b,g,h,j;j=null;h=new Gs;ns(new Ds,h,new OL(new SL(f)))&&(g=new cs(h),j=g.a.a.a);b=j;if(null==b)throw new op("V3000 read failed.");a=dl;this.a.Lc.a="V3000 conversion provided by OpenChemLib"}catch(l){if(l=bp(l),E(l,103))c=l,d=c.ee();else throw l;}else if(this.b.a==fX)try{var n=this.b.b,q,r,u,x,v,t,F;b=-1!=n.indexOf(ce)?(q=gV(n,ce),r=3<=q.length&&0<q[2].length,u=2<=q.length&&0<q[1].length,x=I7(q[0]),\nv=r?I7(q[2]):I7(m),t=u?I7(q[1]):I7(m),F=m,F+=yb,F+=ER(1,3)+ER(1,3),u&&(F+=ER(1,3)),F+=ba,F+=tb+x,F+=tb+v,u&&(F+=tb+t),F):I7(n);this.b.f==(IQ(),RQ)?a="readSMIRKS":this.b.f==cX&&(a="readSMILES");this.a.Lc.a="SMILES conversion provided by OpenChemLib"}catch(G){if(G=bp(G),E(G,103))c=G,d="SMILES parsing error:"+c.ee();else throw G;}else if(d="Invalid or unsupported input",this.a.bd&&!this.b.d)try{var s=new z7,O=ss(this.b.b),ea;if(null==O||0==O.length)ea=null;else{var V=iV(O),$,oa,Ga,Cb,pb;if(null==V)ea=\nnull;else{x7(s,V,0);$=Z(s,4);Cb=Z(s,4);8<$&&($=Cb);oa=Z(s,$);Ga=Z(s,Cb);pb=new us(oa,Ga);var R=null,Qa,Hb,T,Ba,ia,ja,kb,P,Wc,Ha,nc,xc,Ja,ab,Ka,jb,Ia,da,lb,Da,U,$b,X,S,Xb,Ib,md,td,ka,Pb,qc,sa,L,za,gd,Xc,ie,Yc,Ea,mb,fb,Db,ac,Qc,yc,J,Tb,wb,Fc,nb,bc,ic,Ub,hd,nd,pa,Vb,od,Qb,ub,Xa,Gc,vb,Yb,Ya,Vd,ud,jc,vd,Id,Sa,cc;Vd=8;s.f=pb;hr(s.f);if(!(null==V||0==V.length))if(null!=R&&0==R.length&&(R=null),x7(s,V,0),T=Z(s,4),jb=Z(s,4),8<T&&(Vd=T,T=jb),0==T)Ir(s.f,1==Z(s,1));else{Ba=Z(s,T);ia=Z(s,jb);nd=Z(s,T);Qb=Z(s,\nT);od=Z(s,T);Xb=Z(s,T);for(P=0;P<Ba;++P)cr(s.f,6);for(J=0;J<nd;++J)fr(s.f,Z(s,T),7);for(J=0;J<Qb;++J)fr(s.f,Z(s,T),8);for(J=0;J<od;++J)fr(s.f,Z(s,T),Z(s,8));for(J=0;J<Xb;++J)sr(s.f,Z(s,T),Z(s,4)-8);Ib=1+ia-Ba;L=Z(s,4);Ka=0;Cr(s.f,0,0);Dr(s.f,0,0);Er(s.f,0,0);za=null!=R&&39<=R[0];cc=Id=jc=Ya=0;Pb=ka=!1;za&&(R.length>2*Ba-2&&39==R[2*Ba-2]||R.length>3*Ba-3&&39==R[3*Ba-3]?(Pb=!0,Tb=(ka=R.length==3*Ba-3+9)?3*Ba-3:2*Ba-2,ab=86*(R[Tb+1]-40)+R[Tb+2]-40,Ya=Math.pow(10,ab/2E3-1),Tb+=2,ud=86*(R[Tb+1]-40)+R[Tb+\n2]-40,jc=Math.pow(10,ud/1500-1),Tb+=2,vd=86*(R[Tb+1]-40)+R[Tb+2]-40,Id=Math.pow(10,vd/1500-1),ka&&(Tb+=2,Sa=86*(R[Tb+1]-40)+R[Tb+2]-40,cc=Math.pow(10,Sa/1500-1))):ka=R.length==3*Ba-3);s.b&&ka&&(R=null,za=!1);for(J=1;J<Ba;++J)gd=Z(s,L),0==gd?(za&&(Cr(s.f,J,s.f.G[0].a+8*(R[2*J-2]-83)),Dr(s.f,J,s.f.G[0].b+8*(R[2*J-1]-83)),ka&&Er(s.f,J,s.f.G[0].c+8*(R[2*Ba-3+J]-83))),++Ib):(Ka+=gd-1,za&&(Cr(s.f,J,Jo(s.f,Ka)+R[2*J-2]-83),Dr(s.f,J,Ko(s.f,Ka)+R[2*J-1]-83),ka&&Er(s.f,J,Lo(s.f,Ka)+(R[2*Ba-3+J]-83))),gr(s.f,\nKa,J,1));for(J=0;J<Ib;++J)gr(s.f,Z(s,T),Z(s,T),1);Fc=C(no,dn,-1,ia,2);for(da=0;da<ia;++da)switch(U=Z(s,2),U){case 0:w7(s.f,D(s.f,0,da))||w7(s.f,D(s.f,1,da))?oo(s.f,da,32):Fc[da]=!0;break;case 2:oo(s.f,da,2);break;case 3:oo(s.f,da,4)}Hb=Z(s,T);for(J=0;J<Hb;++J)if(P=Z(s,T),8==Vd)ub=Z(s,2),3==ub?(ur(s.f,P,1,0),Ar(s.f,P,1,!1)):Ar(s.f,P,ub,!1);else switch(ub=Z(s,3),ub){case 4:Ar(s.f,P,1,!1);ur(s.f,P,1,Z(s,3));break;case 5:Ar(s.f,P,2,!1);ur(s.f,P,1,Z(s,3));break;case 6:Ar(s.f,P,1,!1);ur(s.f,P,2,Z(s,3));\nbreak;case 7:Ar(s.f,P,2,!1);ur(s.f,P,2,Z(s,3));break;default:Ar(s.f,P,ub,!1)}8==Vd&&0==Z(s,1)&&(s.f.I=!0);Qa=Z(s,jb);for(J=0;J<Qa;++J)if(da=Z(s,jb),1==s.f.E[da])switch(ub=Z(s,3),ub){case 4:Gr(s.f,da,1,!1);Fr(s.f,da,1,Z(s,3));break;case 5:Gr(s.f,da,2,!1);Fr(s.f,da,1,Z(s,3));break;case 6:Gr(s.f,da,1,!1);Fr(s.f,da,2,Z(s,3));break;case 7:Gr(s.f,da,2,!1);Fr(s.f,da,2,Z(s,3));break;default:Gr(s.f,da,ub,!1)}else Gr(s.f,da,Z(s,2),!1);Ir(s.f,1==Z(s,1));kb=null;for(Vb=0;1==Z(s,1);)switch(sa=Vb+Z(s,4),sa){case 0:pa=\nZ(s,T);for(J=0;J<pa;++J)P=Z(s,T),Br(s.f,P,2048);break;case 1:pa=Z(s,T);for(J=0;J<pa;++J)P=Z(s,T),Ub=Z(s,8),zr(s.f,P,Ub);break;case 2:pa=Z(s,jb);for(J=0;J<pa;++J)da=Z(s,jb),oo(s.f,da,64);break;case 3:pa=Z(s,T);for(J=0;J<pa;++J)P=Z(s,T),Br(s.f,P,4096);break;case 4:pa=Z(s,T);for(J=0;J<pa;++J)P=Z(s,T),Yb=Z(s,4)<<3,Br(s.f,P,Yb);break;case 5:pa=Z(s,T);for(J=0;J<pa;++J)P=Z(s,T),ja=Z(s,2)<<1,Br(s.f,P,ja);break;case 6:pa=Z(s,T);for(J=0;J<pa;++J)P=Z(s,T),Br(s.f,P,1);break;case 7:pa=Z(s,T);for(J=0;J<pa;++J)P=\nZ(s,T),Qc=Z(s,4)<<7,Br(s.f,P,Qc);break;case 8:pa=Z(s,T);for(J=0;J<pa;++J){P=Z(s,T);nc=Z(s,4);Wc=C(B,w,-1,nc,1);for(nb=0;nb<nc;++nb)Ha=Z(s,8),Wc[nb]=Ha;var Nc=s.f,je=P,kc=Wc;null==Nc.t&&(Nc.t=C(Qo,xn,93,Nc.J,0));null!=kc&&yp(kc);Nc.t[je]=kc;Nc.N=0;Nc.H=!0}break;case 9:pa=Z(s,jb);for(J=0;J<pa;++J)da=Z(s,jb),Yb=Z(s,2)<<4,Hr(s.f,da,Yb);break;case 10:pa=Z(s,jb);for(J=0;J<pa;++J)da=Z(s,jb),$b=Z(s,4),Hr(s.f,da,$b);break;case 11:pa=Z(s,T);for(J=0;J<pa;++J)P=Z(s,T),Br(s.f,P,8192);break;case 12:pa=Z(s,jb);\nfor(J=0;J<pa;++J)da=Z(s,jb),X=Z(s,8)<<6,Hr(s.f,da,X);break;case 13:pa=Z(s,T);for(J=0;J<pa;++J)P=Z(s,T),Xa=Z(s,3)<<14,Br(s.f,P,Xa);break;case 14:pa=Z(s,T);for(J=0;J<pa;++J)P=Z(s,T),hd=Z(s,5)<<17,Br(s.f,P,hd);break;case 15:Vb=16;break;case 16:pa=Z(s,T);for(J=0;J<pa;++J)P=Z(s,T),vb=Z(s,3)<<22,Br(s.f,P,vb);break;case 17:pa=Z(s,T);for(J=0;J<pa;++J)P=Z(s,T),rr(s.f,P,Z(s,4));break;case 18:pa=Z(s,T);ic=Z(s,4);for(J=0;J<pa;++J){P=Z(s,T);qc=Z(s,ic);bc=C(Pp,Dn,-1,qc,1);for(nb=0;nb<qc;++nb)bc[nb]=Z(s,7)<<24>>\n24;var dc=s.f,Wd=P,cd=ir(bc,0,bc.length),ec=void 0;if(null!=cd)if(0==cd.length)cd=null;else if(ec=Kr(cd),0!=ec&&M(cd,Xq[ec])||M(cd,de))fr(dc,Wd,ec),cd=null;null==cd?null!=dc.r&&(dc.r[Wd]=null):(null==dc.r&&(dc.r=C(ar,o,3,dc.J,0)),dc.r[Wd]=iV(cd))}break;case 19:pa=Z(s,T);for(J=0;J<pa;++J)P=Z(s,T),S=Z(s,3)<<25,Br(s.f,P,S);break;case 20:pa=Z(s,jb);for(J=0;J<pa;++J)da=Z(s,jb),vb=Z(s,3)<<14,Hr(s.f,da,vb);break;case 21:pa=Z(s,T);for(J=0;J<pa;++J)P=Z(s,T),wr(s.f,P,Z(s,2)<<4);break;case 22:pa=Z(s,T);for(J=\n0;J<pa;++J)P=Z(s,T),Br(s.f,P,268435456);break;case 23:pa=Z(s,jb);for(J=0;J<pa;++J)da=Z(s,jb),Hr(s.f,da,131072);break;case 24:pa=Z(s,jb);for(J=0;J<pa;++J)da=Z(s,jb),ja=Z(s,2)<<18,Hr(s.f,da,ja);break;case 25:for(J=0;J<Ba;++J)if(1==Z(s,1)){var dd=s.f;dd.s[J]|=512}break;case 26:pa=Z(s,jb);kb=C(B,w,-1,pa,1);for(J=0;J<pa;++J)kb[J]=Z(s,jb);break;case 27:pa=Z(s,T);for(J=0;J<pa;++J)P=Z(s,T),Br(s.f,P,536870912)}lo(new yo(s.f),Fc);if(null!=kb)for(lb=0,Da=kb.length;lb<Da;++lb)da=kb[lb],oo(s.f,da,2==s.f.E[da]?\n4:2);md=0;if(null==R&&V.length>s.d+1&&(32==V[s.d+1]||9==V[s.d+1]))R=V,md=s.d+2;if(null!=R)try{if(33==R[md]||35==R[md]){x7(s,R,md+1);ka=1==Z(s,1);Pb=1==Z(s,1);Gc=2*Z(s,4);Ia=1<<Gc;da=0;for(P=1;P<Ba;++P)da<ia&&D(s.f,1,da)==P?(Db=D(s.f,0,da++),fb=1):(Db=0,fb=8),Cr(s.f,P,Jo(s.f,Db)+fb*(Z(s,Gc)-~~(Ia/2))),Dr(s.f,P,Ko(s.f,Db)+fb*(Z(s,Gc)-~~(Ia/2))),ka&&Er(s.f,P,Lo(s.f,Db)+fb*(Z(s,Gc)-~~(Ia/2)));Ja=ka?1.5:(kp(),24);xc=jr(s.f,Ba,ia,Ja);if(35==R[md]){yc=0;ac=C(B,w,-1,Ba,1);for(P=0;P<Ba;++P)yc+=ac[P]=xp(s.f,\nP);for(P=0;P<Ba;++P)for(J=0;J<ac[P];++J)Qc=cr(s.f,1),gr(s.f,P,Qc,1),Cr(s.f,Qc,Jo(s.f,P)+(Z(s,Gc)-~~(Ia/2))),Dr(s.f,Qc,Ko(s.f,P)+(Z(s,Gc)-~~(Ia/2))),ka&&Er(s.f,Qc,Lo(s.f,P)+(Z(s,Gc)-~~(Ia/2)));Ba+=yc}if(Pb){var pf=Z(s,Gc),Zf=Math.log(2E3)*Math.LOG10E*pf/(Ia-1)-1;Ya=Math.pow(10,Zf);jc=Ya*y7(Z(s,Gc),Ia);Id=Ya*y7(Z(s,Gc),Ia);ka&&(cc=Ya*y7(Z(s,Gc),Ia));fb=Ya/xc;for(P=0;P<Ba;++P)Cr(s.f,P,jc+fb*Jo(s.f,P)),Dr(s.f,P,Id+fb*Ko(s.f,P)),ka&&Er(s.f,P,cc+fb*Lo(s.f,P))}else{fb=1.5/xc;for(P=0;P<Ba;++P)Cr(s.f,P,fb*\nJo(s.f,P)),Dr(s.f,P,fb*Ko(s.f,P)),ka&&Er(s.f,P,fb*Lo(s.f,P))}}else if(ka&&!Pb&&0==Ya&&(Ya=1.5),0!=Ya&&0!=s.f.p){for(da=xc=0;da<s.f.p;++da)Xc=Jo(s.f,D(s.f,0,da))-Jo(s.f,D(s.f,1,da)),ie=Ko(s.f,D(s.f,0,da))-Ko(s.f,D(s.f,1,da)),Yc=ka?Lo(s.f,D(s.f,0,da))-Lo(s.f,D(s.f,1,da)):0,xc+=Math.sqrt(Xc*Xc+ie*ie+Yc*Yc);xc/=s.f.p;mb=Ya/xc;for(P=0;P<s.f.o;++P)Cr(s.f,P,Jo(s.f,P)*mb+jc),Dr(s.f,P,Ko(s.f,P)*mb+Id),ka&&Er(s.f,P,Lo(s.f,P)*mb+cc)}}catch(bb){if(bb=bp(bb),E(bb,103))Ea=bb,Ea.ee(),R=null,ka=!1;else throw bb;\n}if((td=null!=R&&!ka)||s.b){mo(s.f,3);for(da=0;da<s.f.d;++da)if(2==uo(s.f,da)&&!$o(s.f,da)&&0==(s.f.C[da]&3)){var wd=s.f;wd.C[da]|=16777216}}!td&&s.b&&(s.f.N|=4,wb=new H7,wb.i=new N7,at(wb,s.f),td=!0);td?(Ur(s.f),G7(s.f)):ka||(s.f.N|=4)}ea=pb}}b=(new cs(ea)).a.a.a;a="readOCLCode";d=null}catch(rb){if(rb=bp(rb),!E(rb,103))throw rb;}e=!1;if(null!=b&&null==d)try{(e=PQ(this.a,b,!1))&&this.c&&EO(this.a,a,0,0,0,!0)}catch(Be){if(Be=bp(Be),E(Be,103))d="Invalid converted molfile";else throw Be;}this.a.ic=e;\nthis.e?e?XQ(this.e):YQ(this.e,new op(d)):null!=d&&R3(this.a,d);this.d&&vJ(this.a)};Y(672);Y(673);Y(24);Y(29);Y(30);N(p0)(1);\n//@ sourceURL=1.js\n')