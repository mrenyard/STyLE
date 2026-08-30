<?php
/**
 * STyLE - A Semantically Themed & Layered Element based CSS Framework
 * 
 * Inspired by RAMP's semantic HTML Template patterns as its base, STyLE works from the premise
 * that semantic web documents and application have all the necessary elements (hooks) for a
 * fully fledged CSS framework.
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the
 * GNU General Public License as published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with this program; if
 * not, write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 *
 * @author Matt Renyard (renyard.m@gmail.com)
 * @package STyLE
 * @version 0.0.9;
 */
?>
    <main id="main-index" title="Here for Page Main content on: Base Layout Style"><a href="#main-index">#</a>
      <header<?=($_GET['hero'] === 'true' ? ' class="hero"' : '')?>>
        <h1>MAIN HEADER</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, amet laboriosam! Veniam debitis cupiditate voluptatum obcaecati sequi quod hic nisi neque? Pariatur minima architecto sed molestiae ex at, necessitatibus voluptatibus.</p>
      </header>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam libero dignissimos eum recusandae laudantium iste, accusantium asperiores quidem nemo perferendis odit ipsam temporibus sequi, expedita amet enim aperiam, deleniti rerum!</p>
    </main>
    <article id="article:one" title="Here for: SPECIAL ARTICLE ONE"><a href="#article:one">#</a>
      <header<?=($_GET['hero-indexs'] === 'true' ? ' class="hero"' : '')?>>
        <h2>[SPECIAL ARTICLE ONE]</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, amet laboriosam! Veniam debitis cupiditate voluptatum obcaecati sequi quod hic nisi neque? Pariatur minima architecto sed molestiae ex at, necessitatibus voluptatibus.</p>
      </header>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste quibusdam in perferendis quia perspiciatis dolores commodi officia, fugit obcaecati incidunt, quae rem vero dolorem veritatis sunt repellendus ex provident exercitationem.</p>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste quibusdam in perferendis quia perspiciatis dolores commodi officia, fugit obcaecati incidunt, quae rem vero dolorem veritatis sunt repellendus ex provident exercitationem.&nbsp;&hellip;<a class="overlay" href="#">more</a></p>
      <footer><a href="#top" title="Jump back to Top-of-page (in-page Navigation)">top</a></footer>
    </article>
    <article id="article:two" title="Here for: SPECIAL ARTICLE TWO"><a href="#article:two">#</a>
      <header<?=($_GET['hero-indexs'] === 'true' ? ' class="hero"' : '')?>>
        <h2>[SPECIAL ARTICLE TWO]</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, amet laboriosam! Veniam debitis cupiditate voluptatum obcaecati sequi quod hic nisi neque? Pariatur minima architecto sed molestiae ex at, necessitatibus voluptatibus.</p>
      </header>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste quibusdam in perferendis quia perspiciatis dolores commodi officia, fugit obcaecati incidunt, quae rem vero dolorem veritatis sunt repellendus ex provident exercitationem.</p>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste quibusdam in perferendis quia perspiciatis dolores commodi officia, fugit obcaecati incidunt, quae rem vero dolorem veritatis sunt repellendus ex provident exercitationem.&nbsp;&hellip;<a class="overlay" href="#">more</a></p>
      <footer><a href="#top" title="Jump back to Top-of-page (in-page Navigation)">top</a></footer>
    </article>
    <article id="article:three" title="Here for: SPECIAL ARTICLE THREE"><a href="#article:three">#</a>
      <header<?=($_GET['hero-indexs'] === 'true' ? ' class="hero"' : '')?>>
        <h2>[SPECIAL ARTICLE THREE]</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, amet laboriosam! Veniam debitis cupiditate voluptatum obcaecati sequi quod hic nisi neque? Pariatur minima architecto sed molestiae ex at, necessitatibus voluptatibus.</p>
      </header>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste quibusdam in perferendis quia perspiciatis dolores commodi officia, fugit obcaecati incidunt, quae rem vero dolorem veritatis sunt repellendus ex provident exercitationem.</p>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste quibusdam in perferendis quia perspiciatis dolores commodi officia, fugit obcaecati incidunt, quae rem vero dolorem veritatis sunt repellendus ex provident exercitationem.&nbsp;&hellip;<a class="overlay" href="#">more</a></p>
      <footer>
        <a href="#top" title="Jump back to Top-of-page (in-page Navigation)">top</a>
      </footer>
    </article>
