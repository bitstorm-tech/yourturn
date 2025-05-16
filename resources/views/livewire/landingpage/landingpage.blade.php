<div class="flex flex-col items-center p-8">
    <section class="bg-base-100 w-2/3 items-center p-8 text-center">
        <h1 class="m-4">Board Games on Your Schedule</h1>
        <p>Play classic board games with friends and family, even when you can't be online at the same time.</p>
        <p>Take your turn whenever it's convenient for you.</p>
    </section>

    <section class="bg-base-300 w-2/3 p-8 text-center">
        <h1 class="brand-color">Why Choose GameTurn?</h1>
        <p>Our platform offers a unique way to enjoy board games in today's busy world.</p>
    </section>

    <section class="bg-base-100 w-2/3 p-8 text-center">
        <h1 class="brand-color">Our Games Library</h1>
        <p>Explore our growing collection of classic and modern board games.</p>
        <div class="mt-4 grid grid-cols-2 gap-4">
            <livewire:landingpage.games-card title="Chess" />
            <livewire:landingpage.games-card title="Catan" />
            <livewire:landingpage.games-card title="Monopoly" />
            <livewire:landingpage.games-card title="More coming soon" />
        </div>
    </section>

    <section class="bg-base-300 w-2/3 p-8 text-center">
        <h1 class="brand-color">How It Works</h1>
        <p>Getting started with GameTurn is quick and easy.</p>
        <div class="mt-4 grid grid-cols-2 gap-4">
            <livewire:landingpage.how-it-works-card
                step="1"
                title="Create an Account"
                description="Sign up for free and create your player profile"
            />
            <livewire:landingpage.how-it-works-card
                step="2"
                title="Choose a Game"
                description="Select from our library of classic or modern board games"
            />
            <livewire:landingpage.how-it-works-card
                step="3"
                title="Invitre Friends"
                description="Challenge friends or get matched with players worldwide"
            />
            <livewire:landingpage.how-it-works-card
                step="4"
                title="Play at Your Pace"
                description="Take turns whenever it's convenient for you"
            />
        </div>
    </section>

    <section class="bg-base-100 w-2/3 p-8 text-center">
        <h1 class="brand-color">What Our Players Say</h1>
        <p>Join thousands of happy players enjoying their favorite board games on GameTurn.</p>
    </section>
</div>
