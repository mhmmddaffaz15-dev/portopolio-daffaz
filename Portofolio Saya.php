<!doctype html><html><head><meta charset=utf8><meta name=viewport content="width=device-width,initial-scale=1,viewport-fit=cover"><style>:root{color-scheme:light;box-sizing:border-box;padding-top:env(safe-area-inset-top,0px);padding-bottom:env(safe-area-inset-bottom,0px)}html{scroll-padding-top:env(safe-area-inset-top,0px)}body{margin:0;padding:0;font:14px -apple-system,BlinkMacSystemFont,sans-serif;background:#fff;color:#000}img{max-width:100%}[hidden]:not([hidden=until-found i]){display:none!important}</style></head><body>
<title>Portofolio Saya</title>
<meta name="claude:viewport-fit-sides" content="cover">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@500;700&display=swap">
<style>
/* Layout: tabel satu bingkai. Header penuh, menu kiri + isi, footer penuh. Menu header biru muda seperti contoh. */
:root{
  --bg:#ffffff; --fg:#14171f; --muted:#5a6272; --line:#14171f;
  --menu-head:#8fa8d4; --link:#0b3fd6; --panel:#f3f5f9; --accent:#2c4f9e; --danger:#b3261e;
  --font-text:Inter,Arial,Helvetica,sans-serif; --font-head:"Space Grotesk",Arial,Helvetica,sans-serif;
}
@media (prefers-color-scheme: dark){
  :root:not([data-theme="light"]){
    --bg:#12151c; --fg:#e8ebf2; --muted:#9aa3b5; --line:#c9cfdc;
    --menu-head:#34497a; --link:#8fb0ff; --panel:#1b202b; --accent:#8fb0ff; --danger:#ff8a80; color-scheme:dark;
  }
}
:root[data-theme="dark"]{
  --bg:#12151c; --fg:#e8ebf2; --muted:#9aa3b5; --line:#c9cfdc;
  --menu-head:#34497a; --link:#8fb0ff; --panel:#1b202b; --accent:#8fb0ff; --danger:#ff8a80; color-scheme:dark;
}
body{background:var(--bg);color:var(--fg);font-family:var(--font-text);font-size:15px;line-height:1.55;
  padding-block:16px;padding-left:max(16px,env(safe-area-inset-left,0px));padding-right:max(16px,env(safe-area-inset-right,0px))}
table{border-collapse:collapse}
.frame{width:100%;max-width:1200px;margin:0 auto;border:1px solid var(--line)}
.frame>tbody>tr>td{border:1px solid var(--line)}
.head{height:110px;text-align:center;padding:12px 16px}
.head h1{font:700 1.7rem/1.2 var(--font-head);margin:0;text-wrap:balance}
.head p{margin:4px 0 0;color:var(--muted)}
.side{width:276px;vertical-align:top;padding:6px}
.menu{width:100%;border:1px solid var(--line)}
.menu th{background:var(--menu-head);border-bottom:1px solid var(--line);padding:6px;font-weight:500;font-size:1.05rem;text-align:center}
.menu td{border-bottom:1px solid var(--line);padding:6px 7px 4px}
.menu tr:last-child td{border-bottom:0}
.menu a{display:block;padding:6px 4px 5px;border-bottom:1px solid var(--line);color:var(--link);text-decoration:underline;font-size:1.05rem}
.menu a[aria-current="page"]{font-weight:600}
.menu a:focus-visible,.btn:focus-visible,input:focus-visible,textarea:focus-visible,.thumb:focus-visible{outline:2px solid var(--accent);outline-offset:2px}
.main{vertical-align:top;padding:20px;min-width:0;height:240px}
.foot{text-align:center;padding:8px 12px;font-size:.95rem}
.foot small{display:block;color:var(--muted)}
h2{font:700 1.4rem/1.25 var(--font-head);margin:0 0 14px}
.view[hidden]{display:none}
.row{display:flex;gap:20px;flex-wrap:wrap;align-items:flex-start}
.avatar{width:160px;height:160px;border:1px solid var(--line);background:var(--panel);object-fit:cover;display:flex;align-items:center;justify-content:center;color:var(--muted);font-size:.85rem;text-align:center}
.info{flex:1 1 260px;min-width:0}
.info h3{font:700 1.3rem var(--font-head);margin:0}
.info .role{color:var(--muted);margin:2px 0 10px}
.info p{margin:0;white-space:pre-wrap;max-width:65ch}
.btn{font:inherit;border:1px solid var(--line);background:var(--panel);color:var(--fg);padding:6px 12px;cursor:pointer}
.btn:hover{background:var(--menu-head)}
.btn.danger{color:var(--danger)}
.bar{display:flex;gap:8px;flex-wrap:wrap;margin:14px 0}
label.field{display:block;margin:0 0 10px;font-size:.9rem;color:var(--muted)}
input[type=text],textarea{display:block;width:100%;max-width:520px;box-sizing:border-box;margin-top:3px;padding:6px 8px;font:inherit;color:var(--fg);background:var(--bg);border:1px solid var(--line)}
textarea{min-height:90px;resize:vertical}
.hint{color:var(--muted);font-size:.9rem;margin:6px 0}
.empty{border:1px dashed var(--line);padding:28px 16px;text-align:center;color:var(--muted);max-width:520px}
.cvbox{border:1px solid var(--line);background:var(--panel);max-width:900px}
.cvbox iframe{display:block;width:100%;height:640px;border:0;background:#fff}
.cvbox img{display:block;max-width:100%;margin:0 auto}
.cvname{margin:0 0 8px;font-weight:500;overflow-wrap:anywhere}
.grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(210px,1fr));gap:14px;margin-top:14px}
.card{border:1px solid var(--line);background:var(--panel);display:flex;flex-direction:column;min-width:0}
.thumb{display:block;width:100%;aspect-ratio:4/3;object-fit:cover;cursor:zoom-in;border:0;background:var(--bg)}
.card .txt{padding:8px 10px;flex:1;min-width:0}
.card h4{margin:0 0 2px;font:700 1rem var(--font-head);overflow-wrap:anywhere}
.card p{margin:0;color:var(--muted);font-size:.9rem;white-space:pre-wrap;overflow-wrap:anywhere}
.card .btn{border-width:1px 0 0;width:100%}
.box{border:1px solid var(--line);padding:12px 14px;max-width:560px;background:var(--panel)}
.box h3{margin:0 0 8px;font:700 1.05rem var(--font-head)}
.lightbox{position:fixed;inset:0;background:rgba(0,0,0,.85);display:flex;align-items:center;justify-content:center;padding:16px;z-index:20;cursor:zoom-out}
.lightbox[hidden]{display:none}
.lightbox img{max-width:100%;max-height:100%}
.status{margin:6px 0 0;font-size:.85rem;color:var(--muted);min-height:1.2em}
@media (max-width:700px){
  .frame>tbody>tr>td.side,.frame>tbody>tr>td.main{display:block;width:auto;height:auto}
  .frame>tbody>tr{display:block}
  .head{height:auto}
  .main{padding:16px}
  .cvbox iframe{height:480px}
}
</style>

<table class="frame">
  <tbody>
    <tr><td colspan="2" class="head"><h1 id="siteName">Nama Anda</h1><p id="siteRole">Profesi atau jurusan Anda</p></td></tr>
    <tr>
      <td class="side">
        <table class="menu">
          <thead><tr><th>Menu</th></tr></thead>
          <tbody>
            <tr><td><a href="#beranda" data-v="beranda">Beranda</a></td></tr>
            <tr><td><a href="#cv" data-v="cv">CV</a></td></tr>
            <tr><td><a href="#portofolio" data-v="portofolio">Portofolio</a></td></tr>
            <tr><td><a href="#galeri" data-v="galeri">Galeri</a></td></tr>
          </tbody>
        </table>
      </td>
      <td class="main">

        <section class="view" id="v-beranda">
          <h2>Beranda</h2>
          <div class="row">
            <div class="avatar" id="avatarBox">Foto profil</div>
            <div class="info">
              <h3 id="pName"></h3>
              <p class="role" id="pRole"></p>
              <p id="pAbout"></p>
              <div class="bar"><button type="button" class="btn" id="editProfile">Ubah profil</button></div>
            </div>
          </div>
          <form class="box" id="profileForm" hidden>
            <h3>Ubah profil</h3>
            <label class="field" for="fName">Nama<input type="text" id="fName" maxlength="80"></label>
            <label class="field" for="fRole">Profesi atau jurusan<input type="text" id="fRole" maxlength="120"></label>
            <label class="field" for="fAbout">Tentang saya<textarea id="fAbout" maxlength="1200"></textarea></label>
            <label class="field" for="fAvatar">Foto profil<input type="file" id="fAvatar" accept="image/*"></label>
            <div class="bar" style="margin-bottom:0">
              <button type="submit" class="btn">Simpan</button>
              <button type="button" class="btn" id="cancelProfile">Batal</button>
            </div>
          </form>
        </section>

        <section class="view" id="v-cv" hidden>
          <h2>CV</h2>
          <div id="cvShow"></div>
          <div class="bar">
            <label class="btn" for="cvFile" style="display:inline-block">Unggah CV</label>
            <input type="file" id="cvFile" accept="application/pdf,image/*" hidden>
            <button type="button" class="btn danger" id="cvDel" hidden>Hapus CV</button>
          </div>
          <p class="hint">Format PDF, JPG, atau PNG. Ukuran maksimal 8 MB.</p>
        </section>

        <section class="view" id="v-portofolio" hidden>
          <h2>Portofolio</h2>
          <form class="box" id="pfForm">
            <h3>Tambah karya</h3>
            <label class="field" for="pfTitle">Judul karya<input type="text" id="pfTitle" maxlength="100" required></label>
            <label class="field" for="pfDesc">Deskripsi singkat<textarea id="pfDesc" maxlength="500"></textarea></label>
            <label class="field" for="pfFile">Gambar<input type="file" id="pfFile" accept="image/*" required></label>
            <button type="submit" class="btn">Tambahkan</button>
          </form>
          <div id="pfList"></div>
        </section>

        <section class="view" id="v-galeri" hidden>
          <h2>Galeri</h2>
          <div class="bar" style="margin-top:0">
            <label class="btn" for="gFile" style="display:inline-block">Tambah gambar</label>
            <input type="file" id="gFile" accept="image/*" multiple hidden>
          </div>
          <p class="hint">Pilih satu atau beberapa gambar sekaligus. Klik gambar untuk memperbesar.</p>
          <div id="gList"></div>
        </section>

        <p class="status" id="status" role="status"></p>
      </td>
    </tr>
    <tr><td colspan="2" class="foot">&copy; <span id="year"></span> <span id="footName">Nama Anda</span><small>Data tersimpan di browser ini</small></td></tr>
  </tbody>
</table>

<div class="lightbox" id="lightbox" hidden><img id="lbImg" alt=""></div>

<script>
(function(){
  var $=function(s){return document.querySelector(s)};
  var S={profile:{name:'Nama Anda',role:'Profesi atau jurusan Anda',about:'Tulis perkenalan singkat tentang diri Anda di sini.',avatar:''},cv:null,portfolio:[],gallery:[]};
  var VIEWS=['beranda','cv','portofolio','galeri'];

  /* ---------- penyimpanan (IndexedDB, per browser) ---------- */
  function idb(){return new Promise(function(res,rej){
    var r=indexedDB.open('portofolio-saya',1);
    r.onupgradeneeded=function(){r.result.createObjectStore('kv')};
    r.onsuccess=function(){res(r.result)};r.onerror=function(){rej(r.error)};
  })}
  function idbGet(k){return idb().then(function(d){return new Promise(function(res,rej){
    var q=d.transaction('kv').objectStore('kv').get(k);q.onsuccess=function(){res(q.result)};q.onerror=function(){rej(q.error)};
  })})}
  function idbSet(k,v){return idb().then(function(d){return new Promise(function(res,rej){
    var t=d.transaction('kv','readwrite');t.objectStore('kv').put(v,k);t.oncomplete=function(){res()};t.onerror=function(){rej(t.error)};
  })})}
  var statusTimer;
  function say(msg){var s=$('#status');s.textContent=msg;clearTimeout(statusTimer);statusTimer=setTimeout(function(){s.textContent=''},5000)}
  function save(){
    try{return idbSet('state',S).catch(function(){say('Penyimpanan di browser tidak tersedia. Data hilang saat halaman ditutup.')})}
    catch(e){say('Penyimpanan di browser tidak tersedia. Data hilang saat halaman ditutup.');return Promise.resolve()}
  }

  /* ---------- helper ---------- */
  function el(tag,attrs){
    var e=document.createElement(tag);
    for(var k in (attrs||{})){
      if(k==='text')e.textContent=attrs[k];
      else if(k==='class')e.className=attrs[k];
      else e.setAttribute(k,attrs[k]);
    }
    for(var i=2;i<arguments.length;i++)if(arguments[i])e.appendChild(arguments[i]);
    return e;
  }
  function uid(){return Date.now().toString(36)+Math.random().toString(36).slice(2,7)}
  function toImage(file,max){
    max=max||1600;
    return new Promise(function(res,rej){
      var u=URL.createObjectURL(file),im=new Image();
      im.onload=function(){
        var k=Math.min(1,max/Math.max(im.naturalWidth,im.naturalHeight));
        var w=Math.round(im.naturalWidth*k),h=Math.round(im.naturalHeight*k);
        var c=document.createElement('canvas');c.width=w;c.height=h;
        var x=c.getContext('2d');x.fillStyle='#fff';x.fillRect(0,0,w,h);x.drawImage(im,0,0,w,h);
        URL.revokeObjectURL(u);res(c.toDataURL('image/jpeg',0.85));
      };
      im.onerror=function(){URL.revokeObjectURL(u);rej(new Error('bad'))};
      im.src=u;
    });
  }
  function readData(file){
    return new Promise(function(res,rej){var r=new FileReader();r.onload=function(){res(r.result)};r.onerror=function(){rej(r.error)};r.readAsDataURL(file)});
  }
  function dataToBlobUrl(d){
    var p=d.split(','),m=/data:([^;]+)/.exec(p[0])[1],b=atob(p[1]),a=new Uint8Array(b.length);
    for(var i=0;i<b.length;i++)a[i]=b.charCodeAt(i);
    return URL.createObjectURL(new Blob([a],{type:m}));
  }
  function empty(text){return el('div',{class:'empty',text:text})}

  /* ---------- tampilan ---------- */
  var cvUrl=null;
  function renderProfile(){
    var p=S.profile;
    $('#siteName').textContent=p.name;$('#siteRole').textContent=p.role;
    $('#footName').textContent=p.name;
    $('#pName').textContent=p.name;$('#pRole').textContent=p.role;$('#pAbout').textContent=p.about;
    var box=$('#avatarBox');box.textContent='';
    if(p.avatar){var i=el('img',{src:p.avatar,alt:'Foto '+p.name,class:'avatar'});i.style.border='0';box.style.border='0';box.appendChild(i)}
    else{box.style.border='';box.textContent='Foto profil'}
    document.title=p.name+' | Portofolio';
  }
  function renderCV(){
    var w=$('#cvShow');w.textContent='';
    if(cvUrl){URL.revokeObjectURL(cvUrl);cvUrl=null}
    $('#cvDel').hidden=!S.cv;
    if(!S.cv){w.appendChild(empty('Belum ada CV. Klik "Unggah CV" untuk menambahkan file PDF atau gambar.'));return}
    w.appendChild(el('p',{class:'cvname',text:S.cv.name}));
    var box=el('div',{class:'cvbox'});
    if(S.cv.type==='application/pdf'){
      cvUrl=dataToBlobUrl(S.cv.data);
      box.appendChild(el('iframe',{src:cvUrl,title:'CV '+S.profile.name}));
    }else{
      box.appendChild(el('img',{src:S.cv.data,alt:'CV '+S.profile.name}));
    }
    w.appendChild(box);
  }
  function cardDel(label,fn){var b=el('button',{type:'button',class:'btn danger',text:label});b.addEventListener('click',fn);return b}
  function thumb(src,alt){var i=el('img',{src:src,alt:alt,class:'thumb',tabindex:'0'});
    function open(){$('#lbImg').src=src;$('#lbImg').alt=alt;$('#lightbox').hidden=false}
    i.addEventListener('click',open);i.addEventListener('keydown',function(e){if(e.key==='Enter'||e.key===' '){e.preventDefault();open()}});return i}
  function renderPortfolio(){
    var w=$('#pfList');w.textContent='';
    if(!S.portfolio.length){var e=empty('Belum ada karya. Isi formulir di atas untuk menambahkan karya pertama.');e.style.marginTop='14px';w.appendChild(e);return}
    var g=el('div',{class:'grid'});
    S.portfolio.forEach(function(it){
      g.appendChild(el('div',{class:'card'},thumb(it.img,it.title),
        el('div',{class:'txt'},el('h4',{text:it.title}),el('p',{text:it.desc||''})),
        cardDel('Hapus',function(){S.portfolio=S.portfolio.filter(function(x){return x.id!==it.id});save();renderPortfolio()})));
    });
    w.appendChild(g);
  }
  function renderGallery(){
    var w=$('#gList');w.textContent='';
    if(!S.gallery.length){w.appendChild(empty('Galeri masih kosong. Klik "Tambah gambar" untuk mengunggah foto.'));return}
    var g=el('div',{class:'grid'});
    S.gallery.forEach(function(it,n){
      g.appendChild(el('div',{class:'card'},thumb(it.img,'Gambar galeri '+(n+1)),
        cardDel('Hapus',function(){S.gallery=S.gallery.filter(function(x){return x.id!==it.id});save();renderGallery()})));
    });
    w.appendChild(g);
  }
  function renderAll(){renderProfile();renderCV();renderPortfolio();renderGallery()}

  /* ---------- navigasi ---------- */
  function route(){
    var v=(location.hash||'#beranda').slice(1);if(VIEWS.indexOf(v)<0)v='beranda';
    VIEWS.forEach(function(n){$('#v-'+n).hidden=n!==v});
    document.querySelectorAll('.menu a').forEach(function(a){
      if(a.dataset.v===v)a.setAttribute('aria-current','page');else a.removeAttribute('aria-current');
    });
  }
  window.addEventListener('hashchange',route);

  /* ---------- profil ---------- */
  $('#editProfile').addEventListener('click',function(){
    $('#fName').value=S.profile.name;$('#fRole').value=S.profile.role;$('#fAbout').value=S.profile.about;$('#fAvatar').value='';
    $('#profileForm').hidden=false;$('#fName').focus();
  });
  $('#cancelProfile').addEventListener('click',function(){$('#profileForm').hidden=true});
  $('#profileForm').addEventListener('submit',function(e){
    e.preventDefault();
    var f=$('#fAvatar').files[0];
    function done(){
      S.profile.name=$('#fName').value.trim()||'Nama Anda';
      S.profile.role=$('#fRole').value.trim();
      S.profile.about=$('#fAbout').value.trim();
      save();renderProfile();$('#profileForm').hidden=true;say('Profil disimpan.');
    }
    if(f){toImage(f,600).then(function(d){S.profile.avatar=d;done()}).catch(function(){say('Foto tidak bisa dibaca. Pilih file JPG atau PNG.')})}
    else done();
  });

  /* ---------- CV ---------- */
  $('#cvFile').addEventListener('change',function(e){
    var f=e.target.files[0];e.target.value='';if(!f)return;
    var ok=f.type==='application/pdf'||f.type.indexOf('image/')===0;
    if(!ok){say('Format tidak didukung. Gunakan PDF, JPG, atau PNG.');return}
    if(f.size>8*1024*1024){say('File lebih dari 8 MB. Kecilkan ukurannya lalu coba lagi.');return}
    var p=f.type==='application/pdf'?readData(f):toImage(f,2000);
    p.then(function(d){S.cv={name:f.name,type:f.type==='application/pdf'?'application/pdf':'image/jpeg',data:d};save();renderCV();say('CV diunggah.')})
     .catch(function(){say('File tidak bisa dibaca.')});
  });
  $('#cvDel').addEventListener('click',function(){S.cv=null;save();renderCV()});

  /* ---------- portofolio ---------- */
  $('#pfForm').addEventListener('submit',function(e){
    e.preventDefault();
    var f=$('#pfFile').files[0];if(!f)return;
    toImage(f).then(function(d){
      S.portfolio.unshift({id:uid(),title:$('#pfTitle').value.trim(),desc:$('#pfDesc').value.trim(),img:d});
      save();renderPortfolio();$('#pfForm').reset();say('Karya ditambahkan.');
    }).catch(function(){say('Gambar tidak bisa dibaca. Pilih file JPG atau PNG.')});
  });

  /* ---------- galeri ---------- */
  $('#gFile').addEventListener('change',function(e){
    var files=Array.prototype.slice.call(e.target.files);e.target.value='';if(!files.length)return;
    Promise.all(files.map(function(f){return toImage(f).then(function(d){return {id:uid(),img:d}}).catch(function(){return null})}))
      .then(function(r){
        var good=r.filter(Boolean);S.gallery=good.concat(S.gallery);save();renderGallery();
        say(good.length+' gambar ditambahkan.'+(good.length<files.length?' Sebagian file tidak bisa dibaca.':''));
      });
  });

  /* ---------- lightbox ---------- */
  $('#lightbox').addEventListener('click',function(){this.hidden=true});
  document.addEventListener('keydown',function(e){if(e.key==='Escape')$('#lightbox').hidden=true});

  /* ---------- mulai ---------- */
  $('#year').textContent=new Date().getFullYear();
  route();renderAll();
  try{
    idbGet('state').then(function(v){
      if(v){S.profile=Object.assign(S.profile,v.profile||{});S.cv=v.cv||null;S.portfolio=v.portfolio||[];S.gallery=v.gallery||[];renderAll()}
    }).catch(function(){});
  }catch(e){}
})();
</script>

</body></html>