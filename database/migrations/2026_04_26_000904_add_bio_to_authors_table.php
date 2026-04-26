public function up(): void
{
    Schema::table('authors', function (Blueprint $table) {
        $table->text('bio')->nullable();
    });
}

public function down(): void
{
    Schema::table('authors', function (Blueprint $table) {
        $table->dropColumn('bio');
    });
}