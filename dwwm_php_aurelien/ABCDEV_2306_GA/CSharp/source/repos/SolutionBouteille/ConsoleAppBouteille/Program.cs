using ClassLibraryBouteille;

namespace Ex_Bouteille
{
    public class Program
    {
        static void Main(string[] args)
        {
            Bouteille bouteille1 = new Bouteille(1000, true, 800);
            Console.WriteLine(bouteille1.RemplirTout());
        }
    }
}
