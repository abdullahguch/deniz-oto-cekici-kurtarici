            <!-- Sticky Navbar -->
            <nav class="fixed w-full top-0 z-50 bg-gray-800 bg-opacity-90 text-white">
              <div class="container mx-auto">
                <div class="flex justify-between items-center py-2">
                  <a href="/" class="ml-8 md:ml-12 mr-auto text-lg">Deniz Çekici</a>
                  <!-- Responsive Menu Links (Initially Hidden) -->
                  <div id="menuLinks" class="hidden md:flex space-x-4 ml-auto mr-12">
                    <a href="/" class="hover:text-gray-300 px-3 py-4 rounded transition-transform duration-300">Anasayfa</a>
                    <a href="/hizmetlerimiz" class="hover:text-gray-300 px-3 py-4 rounded transition-transform duration-300">Hizmetlerimiz</a>
                    <a href="/gorseller" class="hover:text-gray-300 px-3 py-4 rounded transition-transform duration-300">Görseller</a>
                    <a href="/iletisim" class="hover:text-gray-300 px-3 py-4 rounded transition-transform duration-300">İletişim</a>
                  </div>
                  <!-- Responsive Menu Button -->
                  <div class="md:hidden mx-6 pt-2 ml-auto">
                    <button id="menuBtn" onclick="toggleMenu()" class="text-white focus:outline-none">
                      <svg fill="#fff" viewBox="-2.5 0 19 19" xmlns="http://www.w3.org/2000/svg" class="h-10 w-10">
                        <path d="M.789 4.836a1.03 1.03 0 0 1 1.03-1.029h10.363a1.03 1.03 0 1 1 0 2.059H1.818A1.03 1.03 0 0 1 .79 4.836zm12.422 4.347a1.03 1.03 0 0 1-1.03 1.029H1.819a1.03 1.03 0 0 1 0-2.059h10.364a1.03 1.03 0 0 1 1.029 1.03zm0 4.345a1.03 1.03 0 0 1-1.03 1.03H1.819a1.03 1.03 0 1 1 0-2.059h10.364a1.03 1.03 0 0 1 1.029 1.03z" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </nav>

            <!-- Off-canvas Menu -->
            <nav
              id="offCanvasMenu"
              class="off-canvas fixed top-0 h-screen bg-gray-600 z-50 transition-transform duration-300 ease-in-out left-[-250px] w-[250px]">
              <ul>
                <li>
                  <h2 class="py-4 px-6 text-sky-500 border-b border-white">Menü</h2>
                </li>
                <li>
                  <a href="/" onclick="toggleMenu()" class="block py-4 px-6 text-white no-underline hover:bg-gray-800">Anasayfa</a>
                </li>
                <li>
                  <a href="/hizmetlerimiz" onclick="toggleMenu()" class="block py-4 px-6 text-white no-underline hover:bg-gray-800">Hizmetlerimiz</a>
                </li>
                <li>
                  <a href="/gorseller" onclick="toggleMenu()" class="block py-4 px-6 text-white no-underline hover:bg-gray-800">Görseller</a>
                </li>
                <li>
                  <a href="/iletisim" onclick="toggleMenu()" class="block py-4 px-6 text-white no-underline hover:bg-gray-800">İletişim</a>
                </li>
              </ul>
            </nav>