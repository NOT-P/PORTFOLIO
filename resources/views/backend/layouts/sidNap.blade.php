 <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
     <div class="sb-sidenav-menu">
         <div class="nav">
             <div class="sb-sidenav-menu-heading">Core</div>
             <a class="nav-link" href="/dashboard">
                 <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                 Dashboard
             </a>
             <div class="sb-sidenav-menu-heading">Pages</div>
             <a class="nav-link collapsed show {{ request()->is('home*') ? 'show active' : '' }} " href="" data-bs-toggle="collapse"
                 data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                 <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                 Home Page
                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse " id="collapseLayouts" aria-labelledby="headingOne"
                 data-bs-parent="#sidenavAccordion">
                 <nav class="sb-sidenav-menu-nested nav">
                     <a class="nav-link {{ request()->is('home/heroProperty') ? 'active' : ''  }} " href="{{ route('heroProperty.index') }}">Hero Property</a>
                     <a class="nav-link {{ request()->is('home/about') ? 'active' : ''  }} " href="{{ route('about.index') }}">About section</a>
                     <a class="nav-link {{ request()->is('home/socials') ? 'active' : '' }} " href="{{ route('socials.index') }}">Social Link</a>
                 </nav>
             </div>

             <a class="nav-link collapsed " href="/resume" data-bs-toggle="collapse" data-bs-target="#resumePage"
                 aria-expanded="false" aria-controls="resumePage">
                 <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                 Resume Page
                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse " id="resumePage" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                 <nav class="sb-sidenav-menu-nested nav">
                     <a class="nav-link " href="resume.html">Resume</a>
                     <a class="nav-link " href="experience.html">Experience</a>
                     <a class="nav-link " href="education.html">Education</a>
                     <a class="nav-link " href="professional-skills.html">Professional Skills</a>
                     <a class="nav-link " href="languages.html">Languages</a>
                 </nav>
             </div>

             <a class="nav-link " href="project.html">
                 <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                 Project
             </a>

             <a class="nav-link " href="contact.html">
                 <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                 Contact
             </a>

             <a class="nav-link " href="seo-property.html">
                 <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                 SEO Property
             </a>

         </div>
     </div>
     <div class="sb-sidenav-footer">
         <div class="small">Logged in as:</div>
         <p class="text-white">Admin</p>
     </div>
 </nav>
