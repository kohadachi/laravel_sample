<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BookingsTableSeeder::class);
        $this->call(BranchesTableSeeder::class);
        $this->call(CardsTableSeeder::class);
        $this->call(CartsTableSeeder::class);
        $this->call(CashregistersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(CommissionsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CouponsTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(GoodsTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(JobsTableSeeder::class);
        $this->call(MailsTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(OrdersubsTableSeeder::class);
        $this->call(OwnbranchesTableSeeder::class);
        $this->call(PositionsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(PurposesTableSeeder::class);
        $this->call(RankingsTableSeeder::class);
        $this->call(ReasonsTableSeeder::class);
        $this->call(RecordsTableSeeder::class);
        $this->call(RefundsTableSeeder::class);
        $this->call(ScalesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(StocksTableSeeder::class);
        $this->call(SubbranchesTableSeeder::class);
        $this->call(SubscriptionsTableSeeder::class);
        $this->call(TicketsTableSeeder::class);
        $this->call(TraincatsTableSeeder::class);
        $this->call(TraintypesTableSeeder::class);
        $this->call(TriggersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(VisitsTableSeeder::class);
    }
}
