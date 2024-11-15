namespace AdditionTest2
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int n1;
            int n2;
            int resultat;
            string saisie;

            Console.WriteLine("Saisir le 1er nombre");
            saisie = Console.ReadLine();
            n1 = int.Parse(saisie);

            Console.WriteLine("Saisir le 2eme nombre");
            saisie = Console.ReadLine();
            n2 = int.Parse(saisie);

            resultat = (n1 + n2);

            Console.WriteLine("Le resultat de " + n1 + " et " + n2 + " vaut " + resultat);

        }
    }
}