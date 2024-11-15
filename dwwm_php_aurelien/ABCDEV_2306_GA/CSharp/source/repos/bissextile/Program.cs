namespace bissextile
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int annee;
            string saisie;

            Console.WriteLine("Saisir l'annee");
            saisie = Console.ReadLine();
            annee = int.Parse(saisie);

            if (((annee % 4 == 0) && (annee % 100 != 0)) || (annee % 400 == 0))
            {
                Console.WriteLine("L'annee " + annee + " est bissextile");
            }
            else
                Console.WriteLine("L'annee " + annee + " est pas bissextile");
        }
    }
}